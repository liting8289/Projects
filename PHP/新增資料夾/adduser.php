<?php
    require_once 'DB_connection.php';
    //首先進行非空排錯
    if(!isset($_GET['name'])){
        exit('name is not define');
    }
    if(!isset($_GET['tel'])){
        exit('tel is not define');
    }
    if(!isset($_GET['mail'])){
        exit('mail is not define');
    }
    $name=$_GET['name'];
    $tel=$_GET['tel'];
    $mail=$_GET['mail'];
    if(empty($name)){
        exit('name is empty');
    }
    if(empty($tel)){
        exit('tel is empty');
    }
    if(empty($mail)){
        exit('mail is empty');
    }
    

    $affectedRow =$dbh->exec("INSERT INTO users(name,tel,mail) VALUES ('$name','$tel','$mail')");

    if(!$affectedRow){
        print_r($dbh->errorInfo()) ;
    }else{
        header("Location: listusers.php");
    }
?>
