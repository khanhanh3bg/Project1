<?php
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}

switch ($action){
    case 'store':
        include_once 'models/customerModel.php';
        include_once 'views/customers/login.php';
    case 'login':
        if(isset($_SESSION['email'])){
            header('Location:index.php?controller=product');
        } else {
            include_once 'views/customers/login.php';
        }
        break;
    case 'register':
        include_once 'views/customers/register.php';
        break;
    case 'loginProcess':
//            Lấy dữ liệu trên DB
        include_once 'models/customerModel.php';
        if($test == 0){
            header('Location:index.php?controller=customer&action=login');
        } elseif($test == 1) {
            header('Location:index.php?controller=product');
        }
        break;
    case 'logout':
//            Xóa session
        include_once 'models/customerModel.php';
//            Quay về trang login
        header('Location:index.php?controller=customer&action=login');
        break;
}
?>