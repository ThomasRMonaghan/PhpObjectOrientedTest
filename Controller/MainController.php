<?php

require_once 'Service/AlphabeticalService.php';
require_once 'Service/SearchService.php';

class MainController
{
    public function index(string $incomingJsonObject, string $operation, string $param)
    {
      $alphabeticalService = $this->getAlphabeticalService();
      $searchJsonService = $this->getSearchService();;
      
        switch ($operation)
        {
            // go through each key, restructure keys via [A-Z 0-9]
            case "Alphabetical Forward":
                return $alphabeticalService->forward($incomingJsonObject);
            // go through each key, restructure keys via [9-0 Z-A]
            case "Alphabetical Reverse":
                return $alphabeticalService->reverse($incomingJsonObject);
            // go through each key, return each key value pair which matches specific param 
            case "Search Iterative":
                return $searchJsonService->iterative($incomingJsonObject, $param);
            // go through each key, return first key value pair which matches specific param
            case "Get First":
                return $searchJsonService->first($incomingJsonObject, $param);
            // go through each key, return last key value pair which matches specific param 
            case "Get Last":
                return $searchJsonService->last($incomingJsonObject, $param);
            default:
            // throw exception
        }
    }

  private function getAlphabeticalService()
  {
    return new AlphabeticalService();
  }
  
  private function getSearchService()
  {
    return new SearchService();
  }
}