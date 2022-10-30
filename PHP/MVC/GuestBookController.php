<?php
    include "SimpleRouter.class.php";
    include "Blade.class.php";
    
    $app = new SimpleRouter();
    /*function textClosure(Closure $closure){
        $closure();
    }*/

    $app->route('/', 'index');
    function index(){
        echo Blade::render('guestbook.html');
    }
    $app->route('/add', 'add');
    function add(){
    include_once "db_connection.php";
    $name = $_REQUEST["name"];
    $gender = $_REQUEST["gender"];
    $comments = $_REQUEST["comments"];
    $subject = $_REQUEST["subject"];
    $ip = $_SERVER["REMOTE_ADDR"];
    $bt = $_SERVER["HTTP_USER_AGENT"];
    echo "<h1>";
    if (($name == "") || ($comments == "")) {
        echo "<body style='background-color: rgb(89, 185, 192)'>";
        echo "請輸入留言內容";
        echo "</body>";
    } else {
        $stmt = $dbh->prepare("insert into messageboard(name,comments,gender,ip,bt,dt,subject)values(?,?,?,?,?,now(),?)");
        $args = [$name, $comments, $gender, $ip, $bt, $subject];
        $stmt->execute($args);
        echo "<body style='background-color: rgb(89, 185, 192)'>";
        echo "<h1>成功留言</h1>";
        echo "</body>";
        $dbh = null;
        $a=Blade::render('MessageBoard_input.php',['name'=>$name,'gender'=>$gender,'subject'=>$subject,'comment'=>$comments,'ip'=>$ip,"bt"=>$bt,
    'dt']);
        return eval($a);
    }
    }
    $app->route('/list','getAll');
    function getAll(){
    include_once "db_connection.php";
    $stmt = $dbh->prepare("select *from messageboard order by dt DESC");
    $stmt->execute();
    echo "<body style='background-color: rgb(89, 185, 192)'>";
    echo "<h1 align='center'>留言【1110731018】</h1>";
    while ($row = $stmt->fetch()) {
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
    $dbh = null;
        $b=Blade::render('Messageboard_list.php',['name'=>$name,'gender'=>$gender,'subject'=>$subject,'comment'=>$comments,'ip'=>$ip,"bt"=>$bt,'dt'=>$dt]);
        echo eval($b);
    };
    $app->execute();
?>

