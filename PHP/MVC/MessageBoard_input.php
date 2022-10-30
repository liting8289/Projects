<?php
echo "<body style='background-color: rgb(89, 185, 192)'>";
include_once "db_connection.php";
$name=$_REQUEST["name"];
$gender=$_REQUEST["gender"];
$comments=$_REQUEST["comments"];
$subject=$_REQUEST["subject"];
$ip=$_SERVER["REMOTE_ADDR"];
$bt=$_SERVER["HTTP_USER_AGENT"];
echo"<h1>";
if(($name=="")||($comments=="")){
    echo "請輸入留言內容";
}else{
    $stmt=$dbh->prepare("insert into messageboard(name,comments,gender,ip,bt,dt,subject)values(?,?,?,?,?,now(),?)");
    $args=[$name, $comments, $gender, $ip, $bt, $subject];
    $stmt->execute($args);
    echo "<h1>成功留言</h1>";
    $dbh=null;
}
echo "</h1>";
echo "</body>";
    ?>