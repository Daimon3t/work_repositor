<?php

include ('libs/calculator.php');

$calcul = new Calculator ($one, $two, $memory);

$data = $calcul->calculate();
extract($data);

include ('template/index.php');
?>
