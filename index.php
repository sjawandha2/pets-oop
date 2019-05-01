<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

$f3 = Base::instance();

$f3->route('GET /', function()
{

    //Display a views
    $view = new Template();
    echo $view->render('views/my-pets.html');
});

//
$f3->run();