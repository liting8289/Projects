<?php
include "SimpleRouter.class.php";
include "Blade.class.php";
$app = new SimpleRouter(); 

$app->route('/', 'index');
function index(){
    echo Blade::render('plass_MVC.html');
}
$app->route('/add', 'add');
function add(){
    $a=$_REQUEST['a'];
    $b=$_REQUEST['b'];
    $ans=$a+$b;
$html=Blade::render('ans_MVC.html', ['a' => $a, 'b' => $b, 'ans' => $ans]);
echo $html;
}

$app->execute();
//$routes: Array ( [/] => index [/add] => add )
?>
