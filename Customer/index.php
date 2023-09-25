<?php
    session_start();
    //Lấy controller đang làm việc
    $controller = '';
    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }
    //Kiểm tra đang làm việc với controller nào
    switch ($controller){
        case '':
            //Cho chọn làm việc với controller nào
            header("Location:index.php?controller=product");
            break;
        case 'customer':
            include_once 'controllers/customerController.php';
            break;
        case 'order':
            include_once 'controllers/orderController.php';
            break;
        case 'staff':
            include_once 'controllers/staffController.php';
            break;
        case 'cart':
            include_once 'controllers/cartController.php';
            break;
        case 'product':
            include_once 'controllers/productController.php';
            break;
    }
?>