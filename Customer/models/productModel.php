<?php
function displayProduct(){
    include_once 'connect/openConnect.php';
    $sqlGucci = "SELECT * FROM product where ID_brand = 1";
    $products1 = mysqli_query($connect, $sqlGucci);
    $sqlDior = "SELECT * FROM product where ID_brand = 2";
    $products2 = mysqli_query($connect, $sqlDior);

    include_once 'connect/closeConnect.php';
    $array = array();
    $array['products1'] = $products1;
    $array['products2'] = $products2;
    return $array;
}

function product_detail(){
    $id = $_GET['id'];
    include_once 'connect/openConnect.php';
    $sql = "SELECT * FROM product WHERE ID_product = '$id'";
    $products = mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
    return $products;
}

switch ($action){
    case '':
        $array = displayProduct();
        break;
    case 'product_detail':
        $products = product_detail();
        break;

}