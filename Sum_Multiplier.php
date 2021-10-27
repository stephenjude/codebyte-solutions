<?php

// This function loops through the array 
// and multiply all items against each other.
function multiplyAllItems($arr): array
{
  $pairs = [];

  for ($cycleIndex = 0; $cycleIndex < count($arr); $cycleIndex++){
    for ($index = 0; $index < count($arr); $index++){
      // Avoid multiplying the same index
      if($cycleIndex !== $index){
        $pairs[] = $arr[$cycleIndex] * $arr[$index];
      }
    }
  }

  return $pairs;
}

function sumMultiplier($arr): string
{

  $maxMultiple = max(multiplyAllItems($arr));

  $arrSumProduct = array_sum($arr) * 2;

  return $maxMultiple > $arrSumProduct ? 'true' : 'false';

}

//Try changing each item of the array for different output
//You can get an idea of sample input from Sum_multiplier.MD
$arr = [2, 5, 6, -6, 16, 2, 3, 6, 5, 3];
echo sumMultiplier($arr);
