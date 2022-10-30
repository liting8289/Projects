<?php

include "SimpleRouter.class.php";
include "Blade.class.php";
include "PS_Pagination.php";
//include "db_connection.php";


$app = new SimpleRouter();

$app->route('/', 'index');
function index(){
    echo Blade::render('Pagination.php');
}
$app->execute();
?>