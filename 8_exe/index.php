<?php

use Controller\DateTimeController;

spl_autoload_register(function ($dandt) {
    $dandt = str_replace('\\', '/', $dandt);
    include_once 'src/' . $dandt . '.php';
});

$controller = new DateTimeController();
$controller->displayFormats();
