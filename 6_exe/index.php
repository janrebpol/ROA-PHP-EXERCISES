<?php

class Sort {
    private $numbers;

    public function __construct($numbers) {
        $this->numbers = $numbers;
    }

    public function AscendingOrder() {
        sort($this->numbers);
    }

    public function DescendingOrder() {
        rsort($this->numbers);
    }

    public function DisplayResult() {
        return $this->numbers;
}
}

$originalNumbers = [23, 424, 12, 234, 2, 33, 55, 666, 69, 88];
echo "Set of numbers to sort:<b> <br>". implode(", ", $originalNumbers) . "<br><br></b>";

$arrange = new Sort($originalNumbers);

$arrange->AscendingOrder();
$ascedingOrder = $arrange->AscendingOrder();
echo "Ascending Order:<b> <br>". implode(", ", $arrange->DisplayResult()). "<br><br></b>";

$arrange->DescendingOrder();
$descendingOrder = $arrange->DescendingOrder();
echo "Descending Order:<b> <br>". implode(", ", $arrange->DisplayResult()). "<br><br></b>";