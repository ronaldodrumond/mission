<?php
    require_once 'db-connect.php';
    session_start();
    
    if (isset($_POST["email"])){
        $emailForm = $_POST["email"];
    }
    if (isset($_POST["password"])){
        $passwordForm = $_POST["password"];
    }

    $query = "SELECT * FROM employee WHERE email = '$emailForm' AND password = '$passwordForm';";
    $result = pg_query($dbconn, $query);
    if(pg_num_rows($result) != 1) {
        // do error stuff
        header('Location: index.php');
        $_SESSION['message'] = 'Error in e-mail or password, please try it again';
    } else {
        // user logged in
        $arrayResult = pg_fetch_array($result);
        $_SESSION['user'] = $arrayResult;
        $typeEmployee = $arrayResult['type_employee'];
        if (strcmp($typeEmployee, 'employee')==0) {
            header('Location: employee/index.php');
        } else if (strcmp($typeEmployee, 'manager')==0) {
            header('Location: manager/index.php');
        } else if (strcmp($typeEmployee, 'admin')==0) {
            header('Location: administrator/index.php');
        }
    }
?>