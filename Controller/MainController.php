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
        // matches all uses of key, returns paired values in array
        case "Search Iterative":
          return $searchJsonService->iterative($incomingJsonObject, $param);
        // matches first use of key, returns paired value
        case "Search First":
          return $searchJsonService->first($incomingJsonObject, $param);
        // matches last use of key, returns paired value
        case "Search Last":
          return $searchJsonService->last($incomingJsonObject, $param);
        default:
          return "The Operations chosen: '" . $operation . "' is currently not supported.";
        break;
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