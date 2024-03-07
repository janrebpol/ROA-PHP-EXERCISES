<?php

namespace Model;

class SortModel
{
    private $numbers;

    public function __construct($numbers)
    {
        $this->numbers = $numbers;
    }

    public function ascendingOrder()
    {
        sort($this->numbers);
    }

    public function descendingOrder()
    {
        rsort($this->numbers);
    }

    public function getResult()
    {
        return $this->numbers;
    }
}
