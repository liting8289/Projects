<?php
$host = "localhost";
$db_name = "mycomp";
$username = "root";
$password = "";

try{
  $dbh = new PDO("mysql:host={$host};dbname={$db_name}",$username, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection error:".$e->getMessage();
}
$dbh->exec("set character set utf8");

