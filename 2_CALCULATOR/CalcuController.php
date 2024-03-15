<?php

namespace App\Controller;

class CalcuController
{
    private $num1;
    private $num2;
    private $operand;

    public function __construct($num1, $num2, $operand)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operand = $operand;
    }

    public function Compute()
    {
        switch ($this->operand) {
            case 'addition':
                $answer = $this->num1 + $this->num2;
                break;

            case 'subtraction':
                $answer = $this->num1 - $this->num2;
                break;

            case 'multiplication':
                $answer = $this->num1 * $this->num2;
                break;

            case 'division':
                if ($this->num2 == 0) {
                    return "Error";
                }
                $answer = $this->num1 / $this->num2;
                break;

            default:
                $answer = "Error";
                break;
        }
        return $answer;
    }
}
