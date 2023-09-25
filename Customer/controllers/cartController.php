<?php
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
switch ($action){
    case '':
        if(isset($_SESSION['email'])){
            include_once 'models/cartModel.php';
            include_once 'views/carts/displayCart.php';
        }else{
            include_once 'views/customers/login.php';
        }
        break;
    case 'add_cart':
        if(isset($_SESSION['email'])){
            include_once 'models/cartModel.php';
            header('Location:index.php?controller=product');
        } else {
            include_once 'views/customers/login.php';
        }
        break;
    case 'update_cart':
//            Lay du lieu tu view luu len session
        include_once 'models/cartModel.php';
        header('Location:index.php?controller=cart');
        break;
    case 'delete_product':
        include_once 'models/cartModel.php';
        header('Location:index.php?controller=cart');
        break;
    case 'delete_cart':
        include_once 'models/cartModel.php';
        header('Location:index.php?controller=cart');
        break;
    case 'order_cart':
        include_once 'models/cartModel.php';
        header('Location:index.php?controller=cart&action=order_detail');
        break;
    case 'order_detail':
        include_once 'models/cartModel.php';
        include_once 'views/orders/orderDetail.php';
}
?>