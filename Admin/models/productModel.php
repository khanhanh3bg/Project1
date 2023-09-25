<?php
function displayProduct(){
    $search = '';
    if(isset($_POST['search'])){
        $search = $_POST['search'];
    }
    $page = 1;
    if(isset($_POST['page'])){
        $page = $_POST['page'];
    }
    include_once 'connect/openConnect.php';
    $sqlCountRecord = "SELECT COUNT(*) AS count_record FROM product WHERE Product_name LIKE '%$search%'";
    $countRecords = mysqli_query($connect, $sqlCountRecord);
    foreach ($countRecords as $each){
        $countRecord = $each['count_record'];
    }
    $recordOnePage = 5;
    $countPage = ceil($countRecord / $recordOnePage);
    $start = ($page - 1 ) * $recordOnePage;
    $end = $recordOnePage;
    $sql = "SELECT * FROM product WHERE Product_name LIKE '%$search%' LIMIT $start, $end";
    $products = mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
    $array = array();
    $array['search'] = $search;
    $array['products'] = $products;
    $array['page'] = $countPage;
    return $array;
}
function storeProduct(){
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productBrand = $_POST['productBrand'];
    $productQuantity = $_POST['productQuantity'];
    $productDescriptions = $_POST['productDescriptions'];
    $imageFile = $_FILES['imageFile'];
    $imageName = $imageFile['name'];
    $imageURL = "Image/".$imageName;
    move_uploaded_file($imageFile['tmp_name'],$imageURL);
    include_once("connect/openConnect.php");
    $sql = "INSERT product VALUES (NULL, '$productName','$productPrice','$productBrand','$productQuantity','$imageURL','$productDescriptions')";
    $rs = mysqli_query($connect, $sql);
    include_once("connect/closeConnect.php");
}
function editProduct(){
    $id = $_GET['id'];
    include_once('connect/openConnect.php');
    $sql = "SELECT * FROM product WHERE ID_product = '$id'";
    $products = mysqli_query($connect, $sql);
    $sqlBrand = "SELECT * FROM product_brand";
    $brands = mysqli_query($connect, $sqlBrand);
    include_once('connect/closeConnect.php');

    $array = array();
    $array['products'] = $products;
    $array['brands'] = $brands;
    return $array;
}


function product(){
    include_once 'connect/openConnect.php';
    $sqlBrand = "SELECT * FROM product_brand";
    $brands = mysqli_query($connect, $sqlBrand);
    include_once 'connect/closeConnect.php';
    $array = array();
    $array['brands'] = $brands;
    return $array;
}

function updateProduct(){
    $id = $_POST['id'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productBrand = $_POST['productBrand'];
    $productQuantity = $_POST['productQuantity'];
    $productDescriptions = $_POST['productDescriptions'];
    $imageFile = $_FILES['imageFile'];
    $imageName = $imageFile['name'];
    $imageURL = "Image/".$imageName;
    include_once 'connect/openConnect.php';
    $sqlProduct = "UPDATE product SET Product_name = '$productName', Product_price = '$productPrice',ID_brand = '$productBrand',Product_quantity = '$productQuantity', Product_image = '$imageURL',Product_description = '$productDescriptions'WHERE ID_product = '$id'";
    $products = mysqli_query($connect, $sqlProduct);
    include_once 'connect/closeConnect.php';
}

function deleteProduct(){
    $id = $_POST['id_product'];
    include_once 'connect/openConnect.php';
    $sql = "DELETE FROM product WHERE ID_product = '$id'";
    $customers = mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
}

switch ($action){
    case '':
        $array = displayProduct();
        break;
    case 'create':
        $array= product();
        break;
    case 'store':
        storeProduct();
        break;
    case 'edit':
        $array = editProduct();
        break;
    case 'update':
        updateProduct();
        break;
    case 'delete':
        deleteProduct();
        break;
}