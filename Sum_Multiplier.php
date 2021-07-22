<?php

// This function loops through the array 
// and multiply all items against each other.
function multiplyAllItems($arr){
  $pairs = [];
  $start = 0; 

  while($start < count($arr)){
    for ($cycleIndex = 0; $cycleIndex < count($arr); $cycleIndex++){
      for ($index = 0; $index < count($arr); $index++){
        // Avoid multiplying the same index
        if($cycleIndex !== $index){
          $pairs[] = $arr[$cycleIndex] * $arr[$index];
        }
      }
    }
    $start++;
  }

  return $pairs;
}

function SumMultiplier($arr) {

  $maxMultiple = max(multiplyAllItems($arr));

  $arrSumProduct = array_sum($arr) * 2;

  return $maxMultiple > $arrSumProduct ? 'true' : 'false';

}
