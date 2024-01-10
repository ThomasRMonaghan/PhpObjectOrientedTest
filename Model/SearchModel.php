<?php

class SearchModel
{
  public function searchForFirstKeyInstance($incomingData, $searchParameter)
  {   
      array_keys($incomingData, SORT_ASC, SORT_REGULAR);

    return $incomingData;
  }

  public function searchForAllKeyInstances($incomingData, $searchParameter)
  {   
    return array_keys($incomingData, $searchParameter);
  }

  public function searchForLastKeyInstance($incomingData, $searchParameter)
  {   
    return array_keys($incomingData, SORT_ASC, SORT_REGULAR);

    return $incomingData;
  }
}