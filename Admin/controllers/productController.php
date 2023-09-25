<?php
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    switch ($action){
        case '':
            include_once 'models/productModel.php';
            include_once 'views/products/displayProduct.php';
            break;
        case 'create':
            include_once 'models/productModel.php';
            include_once 'views/products/createProduct.php';
            break;
        case 'store':
            include_once 'models/productModel.php';
            header('Location:index.php?controller=product');
            break;
        case 'edit':
            include_once 'models/productModel.php';
            include_once 'views/products/editProduct.php';
            break;
        case 'update':
            include_once 'models/productModel.php';
            header('Location:index.php?controller=product');
            break;
        case 'delete':
            include_once 'models/productModel.php';
            header('Location:index.php?controller=product');
            break;
    }
?>