<?php
//function lấy dữ liệu
    function displayOrder(){
        include_once 'connect/openConnect.php';
        $sql = "SELECT `order`.ID_order,`order`.Order_status, `order`.Order_date, customer.Customer_name, customer.Customer_phone FROM `order`
                INNER JOIN customer ON customer.ID_customer = `order`.ID_customer";
        $orders = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        return $orders;
    }

    function detail(){
        $id = $_GET['id'];
        include_once 'connect/openConnect.php';
        $sql = "SELECT `order`.ID_order, customer.Customer_name, product.Product_name, product.Product_image, order_detail.Quantity, order_detail.Price, `order`.Order_date, `order`.Order_status FROM order_detail
                INNER JOIN product ON product.ID_product = order_detail.ID_product
                INNER JOIN `order` ON `order`.ID_order = order_detail.ID_order
                INNER JOIN customer ON customer.ID_customer = `order`.ID_customer 
                WHERE `order`.ID_order = '$id'";
        $details = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        return $details;
    }
//    Function lấy customer
    function createOrder(){
        
        include_once 'connect/openConnect.php';
        $sql = "SELECT * FROM customer";
        $customers = mysqli_query($connect, $sql);
        $sql = "SELECT * FROM staff";
        $staffs = mysqli_query($connect, $sql);
        $sql = "SELECT * FROM transport";
        $transports = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        $array = array();
        $array['customers'] = $customers;
        $array['staffs'] = $staffs;
        $array['transports'] = $transports;
        return $array;
    }
//    function lưu dữ liệu lên db
    function storeOrder(){
        $date_buy = $_POST['orderDate'];
        $status = $_POST['orderStatus'];
        $customer_id = $_POST['customerName'];
        $transport_id = $_POST['transportName'];
        $staff_id = $_POST['staffName'];
        include_once 'connect/openConnect.php';
        $sql = "INSERT INTO `order`(Order_date, Order_status, ID_staff ,ID_customer, ID_transport ) VALUES ('$date_buy', '$status', '$staff_id', '$customer_id', '$transport_id' )";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
//    function Lấy dữ liệu bản ghi từ DB theo id
    function editOrder(){
        $id = $_GET['id'];
        include_once 'connect/openConnect.php';
        $sqlOrder = "SELECT * FROM `order` WHERE ID_order = '$id'";
        $orders = mysqli_query($connect, $sqlOrder);
        $sqlCustomer = "SELECT * FROM customer";
        $customers = mysqli_query($connect, $sqlCustomer);
        $sqlStaff = "SELECT * FROM staff";
        $staffs = mysqli_query($connect, $sqlStaff);
        $sqlTransport = "SELECT * FROM transport";
        $transports = mysqli_query($connect, $sqlTransport);
        include_once 'connect/closeConnect.php';
        $array = array();
        $array['orders'] = $orders;
        $array['customers'] = $customers;
        $array['staffs'] = $staffs;
        $array['transports'] = $transports;
        return $array;
    }
//    function Sửa dữ liệu trên db
    function updateOrder(){
        $id = $_GET['id'];
        $staff_id = $_SESSION['staff_id'];
        $status = $_POST['status'];
        include_once 'connect/openConnect.php';
        $sql = "UPDATE `order` SET ID_staff = '$staff_id', Order_status = '$status' WHERE ID_order = '$id'";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
//    function xóa dữ liệu trên db
    function deleteOrder(){
        $id = $_POST['id_order'];
        include_once 'connect/openConnect.php';
        $sql = "DELETE FROM `order` WHERE ID_order = '$id'";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }

//    Kiểm tra hành động hiện tại
    switch ($action){
        case '':
//            Lấy dữ liệu từ DB về
            $orders = displayOrder();
            break;
        case 'create':
//            Lấy customer
            $array = createOrder();
            break;
        case 'store':
//            Lưu dữ liệu lên db
            storeOrder();
            break;
        case 'detail':
            $details = detail();
            break;
        case 'edit':
//            Lấy dữ liệu bản ghi từ DB theo id
            $array = editOrder();
            break;
        case 'update':
//            Sửa dữ liệu trên db
            updateOrder();
            break;
        case 'delete':
//            Xóa dữ liệu trên db
            deleteOrder();
            break;
    }
?>