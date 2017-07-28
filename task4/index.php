<?php
include ('libs/function.php');
include ('config.php');


$conn = new Suid();

$res = $conn->author();

var_dump($res);




















?>