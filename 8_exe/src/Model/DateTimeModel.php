<?php

namespace Model;

use DateTime;

class DateTimeModel
{
    private $currentDateTime;

    public function __construct()
    {
        date_default_timezone_set('Asia/Manila');
        $this->currentDateTime = new DateTime();
    }

    public function getDifferentFormats()
    {
        $formats = [
            'Default Format' => date_format($this->currentDateTime, 'Y-m-d H:i:s'),
            'Short Date' => date_format($this->currentDateTime, 'm/d/Y'),
            'Long Date' => date_format($this->currentDateTime, 'l, F j, Y'),
            'Time Only' => date_format($this->currentDateTime, 'H:i:s'),
            'Day of the Week' => date_format($this->currentDateTime, 'l'),
            'Month Abbreviation' => date_format($this->currentDateTime, 'M'),
            'Year' => date_format($this->currentDateTime, 'Y'),
            'AM/PM Time' => date_format($this->currentDateTime, 'h:i A'),
            'ISO 8601' => date_format($this->currentDateTime, 'c'),
            'Full Date and Time' => date_format($this->currentDateTime, 'r'),
        ];

        return $formats;
    }
}
