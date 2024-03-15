<?php

include 'calcuController.php';

class CalculatorHandler
{
    private $calculator;

    public function __construct($num1, $num2, $operand)
    {
        $this->calculator = new Calculator($num1, $num2, $operand);
    }

    public function performCalculation()
    {
        $result = $this->calculator->compute();
        $this->redirectWithResult($result);
    }

    private function redirectWithResult($result)
    {
        header("Location: index.php?result=$result");
        exit();
    }
}

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operand = $_POST['operand'];

$calculatorHandler = new CalculatorHandler($num1, $num2, $operand);
$calculatorHandler->performCalculation();
