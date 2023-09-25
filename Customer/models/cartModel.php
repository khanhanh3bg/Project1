<?php
function add_cart(){
    $product_id = $_GET['id'];
    if(isset($_SESSION['cart'])){
        if(isset($_SESSION['cart'][$product_id])){
            $_SESSION['cart'][$product_id]++;
        } else {
            $_SESSION['cart'][$product_id] = 1;
        }
    } else {
        $_SESSION['cart'] = array();
        $_SESSION['cart'][$product_id] = 1;
    }
}

function view_cart(){
    include_once 'connect/openConnect.php';
    $cart = array();
    $temp = array();
    if(isset($_SESSION['cart'])){
        foreach ($_SESSION['cart'] as $product_id => $amount){
            $sqlProductInfor = "SELECT * FROM product WHERE ID_product = '$product_id'";
            $products = mysqli_query($connect, $sqlProductInfor);
            foreach ($products as $product){
                $cart[$product_id]['name'] = $product['Product_name'];
                $cart[$product_id]['price'] = $product['Product_price'];
                $cart[$product_id]['amount'] = $amount;
            }
        }
    }
    include_once 'connect/closeConnect.php';
    $temp['cart'] = $cart;
    return $temp;
}

function update_cart(){
//        Lay du lieu
    $amounts = $_POST['amount'];

//        Luu len session
    foreach ($amounts as $product_id => $each){
        $_SESSION['cart'][$product_id] = $each;
    }
}

function delete_product(){
    $product_id = $_GET['product_id'];
    unset($_SESSION['cart'][$product_id]);
}

function delete_cart(){
    unset($_SESSION['cart']);
    $_SESSION['cart'] = array();
}

function order_cart(){
//        Lay thong tin bao gom: customer_id, staff_id, product, date_buy
    $customer_id = $_SESSION['customer_id'];
    $date_buy = date('Y-m-d');
    $status = 0;
    include_once 'connect/openConnect.php';
    $sqlInsertBill = "INSERT INTO `order`(Order_status, Order_date, ID_customer) VALUES ('$status','$date_buy','$customer_id')";
    mysqli_query($connect, $sqlInsertBill);
    $sqlBillID = "SELECT MAX(ID_order) AS bill_id FROM `order` WHERE ID_customer = '$customer_id'";
    $maxID = mysqli_query($connect, $sqlBillID);
    foreach ($maxID as $each){
        $bill_id = $each['bill_id'];
    }
    foreach ($_SESSION['cart'] as $product_id => $value){
        $amount = $value;
        $sqlPrice = "SELECT Product_price FROM product WHERE ID_product = '$product_id'";
        $priceProduct = mysqli_query($connect, $sqlPrice);
        foreach ($priceProduct as $item){
            $price = $item['Product_price'];
        }
        $sqlInsertBillDetail = "INSERT INTO order_detail VALUES ('$price','$amount','$bill_id', '$product_id')";
        mysqli_query($connect, $sqlInsertBillDetail);
    }
    unset($_SESSION['cart']);
    $_SESSION['cart'] = array();
    include_once 'connect/closeConnect.php';
}

function order_detail(){
    $customer_id = $_SESSION['customer_id'];
    include_once 'connect/openConnect.php';
    $sqlBillID = "SELECT MAX(ID_order) AS bill_id FROM `order` WHERE ID_customer = '$customer_id'";
    $maxID = mysqli_query($connect, $sqlBillID);
    foreach ($maxID as $each){
        $bill_id = $each['bill_id'];
    }
    $sqlOrderDetail = "SELECT customer.Customer_name, product.Product_image,product.Product_name, order_detail.Quantity, order_detail.Price, `order`.Order_date, `order`.Order_status FROM order_detail
                       INNER JOIN product ON order_detail.ID_product = product.ID_product
                       INNER JOIN `order` ON order_detail.ID_order = `order`.ID_order
                       INNER JOIN customer ON `order`.ID_customer = customer.ID_customer WHERE `order`.ID_order = '$bill_id'";
    $orderDetails = mysqli_query($connect, $sqlOrderDetail);
    include_once 'connect/closeConnect.php';
    return $orderDetails;
}

switch ($action){
    case '':
        $temp = view_cart();
        break;
    case 'add_cart':
        add_cart();
        break;
    case 'update_cart':
        update_cart();
        break;
    case 'delete_product':
        delete_product();
        break;
    case 'delete_cart':
        delete_cart();
        break;
    case 'order_cart':
        order_cart();
        break;
    case 'order_detail':
        $orderDetails = order_detail();
        break;
}