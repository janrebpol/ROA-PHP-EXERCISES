<?php

namespace Sort;

use Controller\SortController;
use Model\SortModel;
use View\SortView;

require_once 'model/SortModel.php';
require_once 'view/SortView.php';
require_once 'controller/SortController.php';

$inputNumbers = [23, 424, 12, 234, 2, 33, 55, 666, 69, 88];

$model = new SortModel($inputNumbers);
$view = new SortView();
$controller = new SortController($model, $view);

$controller->process();
