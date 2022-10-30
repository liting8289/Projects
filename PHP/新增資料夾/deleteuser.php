<?php
require_once 'DB_connection.php';

//排空錯誤
if(empty($_GET['id'])){
    exit('id is empty');
}

$id=intval($_GET['id']);

//刪除指定資料
$affectedRow=$dbh->query("DELETE FROM users WHERE id=$id");

if(!$affectedRow){ //排錯並返回頁面
    print_r($dbh->errorInfo()) ;
}else{
    header("Location: listusers.php");
}
?>
