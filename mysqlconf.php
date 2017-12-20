<?php
require_once("class.simpleDB.php"); 
require_once("class.simpleMysqli.php");
$settings=array(
    'server' => 'localhost',
    'username' => 'job',
    'password' => 'job',
    'db' => 'sppr',
    'port' => 3306,
    'charset' => 'utf8',
);
$db=new simpleMysqli($settings);

?>