<?php

namespace Model;

class StringModel
{
    public static function concatenateStrings($string1, $string2)
    {
        return $string1 . $string2;
    }

    public static function extractSubstring($inputString, $start, $length)
    {
        return substr($inputString, $start, $length);
    }

    public static function replaceString($inputString, $search, $replace)
    {
        return str_replace($search, $replace, $inputString);
    }
}
