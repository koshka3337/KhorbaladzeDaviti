<?php
$db = mysqli_connect("localhost","dato","131313","my_project");
if(mysqli_connect_errno()){
    echo 'database connection fail with following errors:'.mysqli_connect_errno() ;
    die();
}

define('BASEURL',dirname(dirname(__FILE__)));
//require_once(BASEURL.'\config.php');
//require_once(BASEURL.'\helpers\helpers.php');
//echo BASEURL.'\helpers\helpers.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/MyProject/config.php';
require_once BASEURL.'\helpers\helpers.php';

error_reporting(0);

//../core/init.php