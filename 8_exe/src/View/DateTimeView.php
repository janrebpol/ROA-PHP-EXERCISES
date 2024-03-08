<?php

namespace View;

class DateTimeView
{
    public static function displayFormats($formats)
    {
        echo "Different Date and Time Formats in <b>Philippines</b> (GMT+8):<br>";

        foreach ($formats as $label => $dt) {
            echo "$label: <b>$dt</b><br>";
        }
    }
}
