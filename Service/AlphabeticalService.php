<?php

require_once 'Model/ReorderModels/ReorderForwardModel.php';
require_once 'Model/ReorderModels/ReorderReverseModel.php';

class AlphabeticalService
{
  
    public function forward()
    {
      $reorderForwardModel = new ReorderForwardModel();
      $reorderForwardModel->index();
    }

    public function reverse()
    {
      $reorderReverseModel = new ReorderReverseModel();
      $reorderReverseModel->index();
    }
}