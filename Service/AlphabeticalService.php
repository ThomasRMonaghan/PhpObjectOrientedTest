<?php

require_once 'Model/ReorderModel.php';

class AlphabeticalService
{
  public function forward($incomingJsonObject)
  {
    $reorderModel = $this->getReorderModel();
    $incomingData = json_decode($incomingJsonObject, true);
    $reformattedData = $reorderModel->reorderKeysAsc($incomingData);
    return json_encode($reformattedData);
  }

  public function reverse($incomingJsonObject)
  {
    $reorderModel = $this->getReorderModel();
    $incomingData = json_decode($incomingJsonObject, true);
    $reformattedData = $reorderModel->reorderKeysDesc($incomingData);
    return json_encode($reformattedData);
  }

  private function getReorderModel()
  {
    return new ReorderModel();
  }
}