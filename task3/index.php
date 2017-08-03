<?php
include('libs\function.php');
include('config.php');

$reader = new ReaderFile();
$changed_string = $reader->changed_string($num_string = 0, $new_value = 'one one one');
$changed_symbol = $reader->changed_symbol($num_string = 0, $num_symbol = 1, $new_value = 'l');
$get_String = $reader->get_String($string = 2);
$get_Symbol = $reader->get_Symbol($string = 4, $symbol = 2);
$get_Strings = $reader->get_Strings();
$get_Symbols = $reader->get_Symbols();

include('template\index.php');
?>