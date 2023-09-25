<?php
//    Lấy action hiện tại
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
//    Kiểm tra action là gì
    switch ($action){
        case '':
//            Lấy tất cả các bản ghi từ DB về
            include_once 'models/orderModel.php';
//            Hiển thị dữ liệu ra view
            include_once 'views/orders/displayOrder.php';
            break;
        case 'create':
//            Lấy dữ liệu Customer
            include_once 'models/orderModel.php';
//            Hiển thị form thêm
            include_once 'views/orders/createOrder.php';
            break;
        case 'store':
//            Lưu dữ liệu lên db
            include_once 'models/orderModel.php';
//            Quay lại trang danh sách
            header('Location:index.php?controller=order');
            break;
        case 'edit':
//            Lấy bản ghi đang được edit từ db về
            include_once 'models/orderModel.php';
//            Hiển thị ra form sửa
            include_once 'views/orders/editOrder.php';
            break;
        case 'detail':
            include_once 'models/orderModel.php';
            include_once 'views/orders/orderDetail.php';
            break;
        case 'update':
//            Sửa dữ liệu trên db
            include_once 'models/orderModel.php';
//            Quay lại trang danh sách
            header('Location:index.php?controller=order');
            break;
        case 'delete':
//            Xóa dữ liệu trên db
            include_once 'models/orderModel.php';
//            Quay lại trang danh sách
            header('Location:index.php?controller=order');
            break;
    }
?>