<?php

include ('config.php');
include ('libs/function.php');
include ('templates/index.php');
 
 //var_dump($_POST);
//var_dump($_GET['uploadfile']);
//$uploadResult = upload();




$res = table_files($aFiles);
echo $res;

?>
