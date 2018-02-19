<?php
    if (isset($_POST["inputEmail1"])){
        $idRunner = $_POST["inputEmail"];
    }
    if (isset($_POST["inputPassword"])){
        $idRunner = $_POST["InputPassword"];
    }

    try {$dbuser = 'postgres';
    $dbpass = 'root2018';
    $host = 'localhost';
    $dbname='postgres';
    $connec = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    }catch (PDOException $e) {
    echo "Error : " . $e->getMessage() . "<br/>";
    die();
    }
    $sql = 'SELECT fname, lname, country FROM user_details ORDER BY country';
    foreach ($connec->query($sql) as $row) 
    {
    print $row['fname'] . " ";
    print $row['lname'] . "-->";
    print $row['country'] . "<br>";
    }
?>