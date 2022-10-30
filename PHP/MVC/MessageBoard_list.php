<?php
    include_once "db_connection.php";
    $stmt=$dbh->prepare("select *from messageboard order by dt DESC");
    $stmt->execute();
echo "<body style='background-color: rgb(89, 185, 192)'>";
echo "<h1 align='center'>留言【1110731018】</h1>";
while($row=$stmt->fetch()){
    echo "<hr><h3>";
    echo "ip：" . $row['ip'] . "<br>";
    echo "瀏覽器：" . $row['bt'] . "<br>";
    echo "留言時間：" . $row['dt'] . "<br>";
    echo "姓名：" . $row['name'] . "<br>";
    echo "性別：" . $row['gender'] . "<br>";
    echo "主旨：" . $row['subject'] . "<br>";
    echo "留言：" . $row['comments'] . "<br></h3>"; 
}
echo "</body>";
    $dbh=null;
?>