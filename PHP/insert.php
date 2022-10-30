<?php
include "DB_connection.php";
$sql="INSERT into SalaryDB values('小陳',23,'台中',30000)";
$count=$dbh->exec($sql);
$dbh=null;
header("Location:crud.php");