<?php
    //function lấy dữ liệu
    function index(){
        $search = '';
        if(isset($_POST['search'])){
            $search = $_POST['search'];
        }
        $page = 1;
        if(isset($_POST['page'])){
            $page = $_POST['page'];
        }
        include_once 'connect/openConnect.php';
        $sqlCountRecord = "SELECT COUNT(*) AS count_record FROM customer WHERE Customer_name LIKE '%$search%'";
        $countRecords = mysqli_query($connect, $sqlCountRecord);
        foreach ($countRecords as $each){
            $countRecord = $each['count_record'];
        }
        $recordOnePage = 5;
        $countPage = ceil($countRecord / $recordOnePage);
        $start = ($page - 1 ) * $recordOnePage;
        $end = $recordOnePage;
        $sql = "SELECT * FROM customer WHERE Customer_name LIKE '%$search%' LIMIT $start, $end";
        $customers = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        $array = array();
        $array['search'] = $search;
        $array['customers'] = $customers;
        $array['page'] = $countPage;
        return $array;
    }
    //function để lưu dữ liệu lên db
    function storeCustomer(){
        $name = $_POST['customerName'];
        $address = $_POST['customerAddress'];
        $phone = $_POST['customerPhone'];
        $email = $_POST['customerEmail'];
        $pass = $_POST['customerPass'];
        include_once 'connect/openConnect.php';
        $sql = "INSERT INTO customer(Customer_name, Customer_address, Customer_phone, Customer_email, Customer_password) VALUES ('$name', '$address', '$phone', '$email','$pass')";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
//    function lấy bản ghi dựa theo id
    function editCustomer(){
        $id = $_GET['id'];
        include_once 'connect/openConnect.php';
        $sql = "SELECT * FROM customer WHERE ID_customer = '$id'";
        $customers = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        return $customers;
    }
    //function update bản ghi theo id
    function updateCustomer(){
        $id = $_POST['id'];
        $name = $_POST['customerName'];
        $address = $_POST['customerAddress'];
        $phone = $_POST['customerPhone'];
        $email = $_POST['customerEmail'];
        $password = $_POST['customerPass'];
        include_once 'connect/openConnect.php';
        $sql = "UPDATE customer SET Customer_name = '$name', Customer_address = '$address', Customer_phone = '$phone', Customer_email = '$email', Customer_password = '$password' WHERE ID_customer = '$id'";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    //function delete bản ghi theo id
    function deleteCustomer(){
        $id = $_POST['id_customer'];
        include_once 'connect/openConnect.php';
        $sql = "DELETE FROM customer WHERE ID_customer = '$id'";
        $customers = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }

    //Kiểm tra hành động hiện tại
    switch ($action){
        case '':
            //Lấy dữ liệu từ db
            $array = index();
            break;
        case 'store':
            //Lưu dữ liệu lên db
            storeCustomer();
            break;
        case 'edit':
            //Lấy bản ghi dựa theo id
            $customers = editCustomer();
            break;
        case 'update':
            //update bản ghi theo id
            updateCustomer();
            break;
        case 'delete':
            //delete bản ghi theo id
            deleteCustomer();
            break;
    }
?>