<?php

namespace Controller;

use Model\SortModel;
use View\SortView;

class SortController
{
    private $model;
    private $view;

    public function __construct(SortModel $model, SortView $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function process()
    {
        $this->view->displayNumbers($this->model->getResult());

        $this->model->ascendingOrder();
        $ascendingOrder = $this->model->getResult();
        $this->view->displayAscending($ascendingOrder);

        $this->model->descendingOrder();
        $descendingOrder = $this->model->getResult();
        $this->view->displayDescending($descendingOrder);
    }
}
