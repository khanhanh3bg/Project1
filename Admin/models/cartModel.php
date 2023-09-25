<?php
    function indexProduct(){
        include_once 'connect/openConnect.php';
        $sql = "SELECT * FROM products";
        $products = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        return $products;
    }
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
        $sqlCustomer = "SELECT * FROM customer";
        $customers = mysqli_query($connect, $sqlCustomer);
        $sqlTransport = "SELECT * FROM transport";
        $transports = mysqli_query($connect, $sqlTransport);
        include_once 'connect/closeConnect.php';
        $temp['cart'] = $cart;
        $temp['customers'] = $customers;
        $temp['transports'] = $transports;
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
        $customer_id = $_POST['customer_id'];
        $date_buy = date('Y-m-d');
        $status = 1;
        $staff_id = $_SESSION['staff_id'];
        $transport_id = $_POST['transport_id'];
        include_once 'connect/openConnect.php';
        $sqlInsertBill = "INSERT INTO `order`(Order_status, Order_date, ID_staff, ID_customer, ID_transport) VALUES ('$status','$date_buy','$staff_id','$customer_id','$transport_id')";
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
    }
?>