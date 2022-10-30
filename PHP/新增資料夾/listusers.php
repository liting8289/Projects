<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>所有使用者</title>
    <link rel="stylesheet" href="listusers.css">
</head>
<body>
<center>
<h1>試以PDO，設計一個基於Web的通訊錄管理系統【1110731004】</h1> <hr/>
<a href="adduser.html">新增使用者</a>

<table>
    <tr><th>編號</th><th>名字</th><th>電話</th><th>郵箱</th><th>修改/刪除</th></tr>
<?php
  require_once 'db_connection.php';

    //查詢資料表中的所有資料,並按照id降序排列
    $stmt=$dbh->query("SELECT * FROM users ORDER BY id DESC");
    //獲取資料表的資料條數
    $dataCount=$stmt->rowCount();
    //echo $dataCount;
    //列印輸出所有資料

    for($i=0; $i<$dataCount; $i++){
        $row=$stmt->fetch();
        $id=$row['id'];
        $name=$row['name'];
        $tel=$row['tel'];
        $mail=$row['mail'];
        //print_r($row);
        echo <<<EOT
        <tr>
        <td>$id</td>
        <td>$name</td>
        <td>$tel</td>
        <td>$mail</td>
        <td><a href='edituser.php?id=$id'>修改</a> <a href='deleteuser.php?id=$id'>刪除</a></td>
        </tr>
        EOT;
    }
?>
</center>
</table>
</body>
</html>
