<?php
    function loginProcess(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        include_once 'connect/openConnect.php';
        $sql = "SELECT *, COUNT(*) AS count_staff FROM staff WHERE Staff_email = '$email' AND Staff_password = '$password'";
        $staffs = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        foreach ($staffs as $staff){
            if($staff['count_staff'] == 0){
                return 0;
            } elseif ($staff['count_staff'] == 1){
                $_SESSION['email'] = $email;
                $_SESSION['staff_id'] = $staff['ID_staff'];
                return 1;
            }
        }
    }

    switch ($action){
        case 'loginProcess':
            $test = loginProcess();
            break;
        case 'logout':
            session_destroy();
            break;
    }
?>