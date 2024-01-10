<?php

class ReorderModel
{
  public function reorderKeysAsc($incomingData)
  {   
    array_multisort($incomingData, SORT_ASC, SORT_REGULAR);
    return $incomingData;
  }

  public function reorderKeysDesc($incomingData)
  {   
    array_multisort($incomingData, SORT_DESC, SORT_REGULAR);
    return $incomingData;
  }
}