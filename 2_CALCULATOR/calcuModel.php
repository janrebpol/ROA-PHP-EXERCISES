<?php

include 'calcuController.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operand = $_POST['operand'];

$calculator = new Calculator($num1, $num2, $operand);

$result = $calculator->Compute();

header("Location: index.php?result=$result");
exit();

?>