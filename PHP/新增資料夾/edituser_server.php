<?php
require_once 'db_connection.php';

if(empty($_GET['id'])){
    exit('id is empty');
}
if(empty($_GET['name'])){
    exit('name is empty');
}
if(empty($_GET['tel'])){
    exit('tel is empty');
}
if(empty($_GET['mail'])){
    exit('mail is empty');
}

$id=intval($_GET['id']);
$name=$_GET['name'];
$tel=$_GET['tel'];
$mail=$_GET['mail'];

//修改指定資料
$affectedRow =$dbh->exec("UPDATE users SET name='$name',tel='$tel',mail='$mail' WHERE id=$id");

//排錯並返回
if(!$affectedRow){
    print_r($dbh->errorInfo()) ;
}else{
    header("Location: listusers.php");
}
?>

