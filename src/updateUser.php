<?php
    require_once 'db-connect.php';
    session_start();
    
    if (isset($_POST["firstName"])){
        $firstNameForm = $_POST["firstName"];
    }
    if (isset($_POST["lastName"])){
        $lastNameForm = $_POST["lastName"];
    }
    if (isset($_POST["userName"])){
        $userNameForm = $_POST["userName"];
    }
    if (isset($_POST["email"])){
        $emailForm = $_POST["email"];
    }
    if (isset($_POST["birthday"])){
        $birthdayForm = $_POST["birthday"];
    }
    if (isset($_POST["phoneNumber"])){
        $phoneNumberForm = $_POST["phoneNumber"];
    }
    if (isset($_POST["address"])){
        $addressForm = $_POST["address"];
    }
    if (isset($_POST["password"])){
        $passwordForm = $_POST["password"];
    }

    $id=$_SESSION['user']['id'];
    $typeEmployee = $_SESSION['user']['type_employee'];

    $query = "UPDATE Employee SET firstName='$firstNameForm', lastName='$lastNameForm', email='$emailForm', 
    username='$userNameForm', password='$passwordForm', address='$addressForm', 
    birthday='$birthdayForm', phoneNumber='$phoneNumberForm' WHERE id=$id";
    echo $query;
    $result = pg_query($dbconn, $query);
    if (!$result) {
        echo 'Error.\n';
        exit;
    } else{
        echo 'User updated!';
        $query = "SELECT * FROM employee WHERE id = $id;";
        $result = pg_query($dbconn, $query);
        $arrayResult = pg_fetch_array($result);
        $_SESSION['user'] = $arrayResult;
        if (strcmp($typeEmployee, 'employee')==0) {
            header('Location: employee/employeeAccount.php');
        } else if (strcmp($typeEmployee, 'manager')==0) {
            header('Location: manager/managerAccount.php');
        } else if (strcmp($typeEmployee, 'admin')==0) {
            header('Location: administrator/administratorAccount.php');
        }
    }
?>