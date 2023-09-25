<?php
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
switch ($action){
    case '':
        include_once 'models/cartModel.php';
        include_once 'views/carts/displayCart.php';
        break;
    case 'add_cart':
//            Thêm sp lên giỏ hàng trên session
        include_once 'models/cartModel.php';
        header('Location:index.php?controller=product');
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
        header('Location:index.php?controller=cart');
        break;
}
?>