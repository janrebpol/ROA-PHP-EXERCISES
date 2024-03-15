<?php

namespace App\Model;

use App\Controller\CalcuController;

include 'CalcuController.php';

class CalcuModel
{
    private $calculator;

    public function __construct($num1, $num2, $operand)
    {
        $this->calculator = new CalcuController($num1, $num2, $operand);
        return $this->calculator;
    }

    public function performCalculation()
    {
        $result = $this->calculator->compute();
        return $this->redirectWithResult($result);
        
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

$calculatorHandler = new CalcuModel($num1, $num2, $operand);
$calculatorHandler->performCalculation();
