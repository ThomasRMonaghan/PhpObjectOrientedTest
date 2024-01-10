<?php

class SearchJsonService()
{
    public $searchIterativeModel;
    public $searchFirstModel;
    public $searchLastModel;

    public function __construct(
        $searchIterativeModel,
        $searchFirstModel,
        $searchLastModel,
    ) {
        $this->searchIterativeModel = $searchIterativeModel;
        $this->searchFirstModel = $searchFirstModel;
        $this->searchLastModel = $searchLastModel;
    }

    public function iterative()
    {
        $this->searchIterativeModel->index();
    }

    public function first()
    {
        $this->searchFirstModel->index();
    }

    public function last()
    {
        $this->searchLastModel->index();
    }
}