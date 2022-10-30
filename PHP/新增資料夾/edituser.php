<?php
require_once 'db_connection.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改使用者資料</title>
    <link rel="stylesheet" href="listusers.css">
</head>
<body>
<h1>試以PDO，設計一個基於Web的通訊錄管理系統【1110731004】</h1> <hr/>
<?php
    if(!empty($_GET['id'])){
        //查詢id
        $id=intval($_GET['id']);
        $stmt=$dbh->query("SELECT * FROM users WHERE id=$id");
        if(!$stmt){
            exit('can not query');
        }
        //獲取結果陣列
        $row=$stmt->fetch();
    }else{
        exit('id not define');
    }
?>
<form action="edituser_server.php" method="get">
    <label>編號：</label><input type="int" name="id" value="<?= $row['id']?>">
    <label>名字：</label><input type="text" name="name" value="<?= $row['name']?>">
    <label>電話：</label><input type="text" name="tel" value="<?= $row['tel']?>">
    <label>郵箱：</label><input type="text" name="mail" value="<?= $row['mail']?>">
    <input type="submit" value="提交修改">
</form>
</body>
</html>