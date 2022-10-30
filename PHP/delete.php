<?php
include "DB_connection.php";
$sql = "DELETE FROM SalaryDB WHERE name='小陳'";
$count = $dbh->exec($sql);
$dbh = null;
header("Location:crud.php");
