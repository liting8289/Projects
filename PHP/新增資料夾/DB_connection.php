<?php
    $host = "localhost";
    $db_name = "students";
    $username = "root";
    $password = "";

    try{
        $dbh = new PDO("mysql:localhost={$host};dbname={$db_name}",$username,$password, (array(PDO::ATTR_PERSISTENT => true)));
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Connection error: " . $e->getMessage();
    }
    $dbh->exec("set character set utf8");
?>
