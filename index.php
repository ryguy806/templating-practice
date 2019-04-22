<?php
/**
 * Index page for Templating-Practice
 * User: Ryan Guelzo
 * Date: 04/08/19
 */
session_start();

//error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload
require_once('vendor/autoload.php');

//Creates the instance of the base class
$f3 = Base::instance();

//Specified the default route
$f3->route('GET|POST /', function ($f3){

    //set variables
    $f3->set('title', 'Template-Practice');
    $f3->set('temp', 67);
    $r = 10;
    $f3->set('radius', $C = 2 * pi() * $r);

    $fruits = array('apple', 'banana', 'orange');
    $f3->set('fruits', $fruits);

    $bookmarks = array('CNN'=>'http://cnn.com', 'Homestar Runner'=>'http://homestarrunner.com', 'Green River'=>'http://greenriver.edu');
    $f3->set('bookmarks', $bookmarks);

    $flavors = array('chocolate'=>'Chocolate', 'vanilla'=>'Vanilla', 'strawberry'=>'Strawberry');
    $f3->set('flavors', $flavors);

    //load a template
    $template = new Template();
    echo $template->render('views/home.html');

});

$f3->run();