<?php

namespace View;

class SortView
{
    public function displayNumbers($numbers)
    {
        echo "Set of numbers to sort:<b> <br>" . implode(", ", $numbers) . "<br><br></b>";
    }

    public function displayAscending($result)
    {
        echo "Ascending Order:<b> <br>" . implode(", ", $result) . "<br><br></b>";
    }

    public function displayDescending($result)
    {
        echo "Descending Order:<b> <br>" . implode(", ", $result) . "<br><br></b>";
    }
}
