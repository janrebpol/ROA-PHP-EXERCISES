<?php

namespace Controller;

use Model\StringModel;
use View\StringView;

class StringController
{
    public function concatenateStrings($string1, $string2)
    {
        $result = StringModel::concatenateStrings($string1, $string2);
        StringView::displayResult("Concatenated String<br><b>", $result. "</b>");
    }

    public function extractSubstring($inputString, $start, $length)
    {
        $result = StringModel::extractSubstring($inputString, $start, $length);
        StringView::displayResult("Substring<br><b>", $result. "</b>");
    }

    public function replaceString($inputString, $search, $replace)
    {
        $result = StringModel::replaceString($inputString, $search, $replace);
        StringView::displayResult("<br>Replaced String: <br>Search the string 'Hello World!', find the value 'world' and replace it with 'Paul'<br><b> ", $result. "</b>");
    }
}
