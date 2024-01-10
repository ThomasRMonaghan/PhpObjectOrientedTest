<?php

require_once 'Model/SearchModels/SearchFirstModel.php';
require_once 'Model/SearchModels/SearchIterativeModel.php';
require_once 'Model/SearchModels/SearchLastModel.php';

class SearchJsonService
{
    public function first()
    {
      $searchFirstModel = new searchFirstModel();
      $searchFirstModel->index();
    }

    public function iterative()
    {
      $searchIterativeModel = new SearchIterativeModel();
      $searchIterativeModel->index();
    }

    public function last()
    {
      $searchLastModel = new searchLastModel();
      $searchLastModel->index();
    }
}