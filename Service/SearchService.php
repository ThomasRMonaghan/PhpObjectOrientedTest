<?php

require_once 'Model/SearchModel.php';

class SearchService
{
    public function first(string $incomingJsonObject, string $param): string
    {
      $searchModel = $this->getSearchModel();
      $incomingData = json_decode($incomingJsonObject, true);
      $reformattedData = $searchModel->searchForFirstKeyInstance($incomingData, $param);
      return json_encode($reformattedData);
    }

    public function iterative(string $incomingJsonObject, string $param): string
    {
      $searchModel = $this->getSearchModel();
      $incomingData = json_decode($incomingJsonObject, true);
      $reformattedData = $searchModel->searchForAllKeyInstances($incomingData, $param);
      return json_encode($reformattedData);
    }

    public function last(string $incomingJsonObject, string $param): string
    {
      $searchModel = $this->getSearchModel();
      $incomingData = json_decode($incomingJsonObject, true);
      $reformattedData = $searchModel->searchForLastKeyInstance($incomingData, $param);
      return json_encode($reformattedData);
    }

    private function getSearchModel(): SearchModel
    {
      return new SearchModel();
    }
}