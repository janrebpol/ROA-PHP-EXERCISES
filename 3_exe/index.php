<?php

class FibonacciSeq
{
    private $num;

    public function __construct($num)
    {
        $this->num = $num;
    }

    public function fibonacci()
    {
        $fibonacci = [0, 1];
        for ($i = 2; $i < $this->num; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        echo implode(" ", $fibonacci);
    }
}

$sequence = new FibonacciSeq(10);
$sequence->fibonacci();
