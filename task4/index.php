<?php
include ('libs/function.php');
include ('config.php');


$suid = new Suid();
//$asdas = $suid->author();
//$asdasasda = $suid->insert();
//$res = $conn->author();
$sel = $suid->select(data)->from(mytest)->exec();
var_dump($sel);




















?>