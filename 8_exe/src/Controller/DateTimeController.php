<?php

namespace Controller;

use Model\DateTimeModel;
use View\DateTimeView;

class DateTimeController
{
    private $dateTimeFormats;

    public function __construct()
    {
        $this->dateTimeFormats = new DateTimeModel();
    }

    public function displayFormats()
    {
        $formats = $this->dateTimeFormats->getDifferentFormats();
        DateTimeView::displayFormats($formats);
    }
}
