<?php

include ('config.php');
include ('libs/function.php');

$file_exis = file_exis();
$upload = upload();
$file_del = file_delete();
$arr = get_files();

include ('templates/index.php');
?>
