<?php
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}

switch ($action){
    case '':
        include_once 'models/productModel.php';
        include_once 'views/home.php';
        break;
    case 'product_detail':
        include_once 'models/productModel.php';
        include_once 'views/products/productDetail.php';
        break;
}