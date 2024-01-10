<?php

class SearchModel
{
  public $searchParameter;
  public $results = [];
  
  public function searchForFirstKeyInstance($incomingData, $searchParameter)
  {   
    $this->searchParameter = $searchParameter;
    $this->searchNestedArray($incomingData);
    return $this->results[0] ?? null;
  }

  public function searchForAllKeyInstances(array $incomingData, $searchParameter)
  {
    $this->searchParameter = $searchParameter;
    $this->searchNestedArray($incomingData);
    return $this->results;
  }

  public function searchForLastKeyInstance($incomingData, $searchParameter)
  {   
    $this->searchParameter = $searchParameter;
    $this->searchNestedArray($incomingData);
    return end($this->results);
  }

  private function searchNestedArray($incomingData)
  {
    return array_walk($incomingData , array($this, 'matchIndex'));
  }

  private function matchIndex($value,$key)
  {
    if (is_array($value))
    {
      $this->searchNestedArray($value);
    }

    if (str_contains($key, $this->searchParameter))
    {
      array_push($this->results, $value);
    }
  }
}