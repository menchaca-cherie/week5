<?php
error_reporting(E_ALL);

//Start session
//session_start();

//Require the autoload File
require_once ('vendor/autoload.php');

//Create an instance of the base class
$f3 = Base::instance();
//echo gettype($f3); example of what type is $f3

//Define a default route /- root directory of the project
$f3->route('GET /', function(){

    $view = new Template();
    echo $view->render('views/home.html');
});