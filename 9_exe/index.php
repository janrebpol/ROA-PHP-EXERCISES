<?php

use Controller\StringController;

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    include_once 'src/' . $class . '.php';
});

$string1 = "Hello, <br>";
$string2 = "Paul! <br>";
$inputString = "Hello, World!<br>";

$controller = new StringController();

$controller->concatenateStrings($string1, $string2);
$controller->replaceString($inputString, "World","Paul","Hello World!");
$controller->extractSubstring($inputString, 0, 5);
