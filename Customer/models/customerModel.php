<?php
function storeCustomer(){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    include_once 'connect/openConnect.php';
    $sql = "INSERT INTO customer(Customer_name, Customer_address, Customer_phone, Customer_email, Customer_password) VALUES ('$name', '$address', '$phone', '$email','$pass')";
    mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
}

function loginProcess(){
    $email = $_POST['email'];
    $password = $_POST['password'];
    include_once 'connect/openConnect.php';
    $sql = "SELECT *, COUNT(*) AS count_customer FROM customer WHERE Customer_email = '$email'AND Customer_password = '$password'";
    $customers = mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
    foreach ($customers as $customer){
        if($customer['count_customer'] == 0){
            return 0;
        } elseif ($customer['count_customer'] == 1){
            $_SESSION['email'] = $email;
            $_SESSION['customer_id'] = $customer['ID_customer'];
            return 1;
        }
    }
}

switch ($action){
    case 'store':
        storeCustomer();
        break;
    case 'loginProcess':
        $test = loginProcess();
        break;
    case 'logout':
        session_destroy();
        break;

}