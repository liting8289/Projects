<?php
include "DB_connection.php";
$sql = "UPDATE SalaryDB SET salary='38000' WHERE name='小陳'";
$count = $dbh->exec($sql);
$dbh = null;
header("Location:crud.php");