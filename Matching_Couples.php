<?php

function getFactorial(int $number){
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++){
      $factorial = $factorial * $i;
    }
    return $factorial;
}

function calculateNumberOfWays(int $number, int $choice){
  return getFactorial($number) / (getFactorial($choice) * getFactorial($number-$choice));
}

function MatchingCouples($arr) {

  $possibleWaysToPair = $arr[2]/2;

  $numberOfWaysForBoys = calculateNumberOfWays($arr[0], $possibleWaysToPair);
  $numberOfWaysForGirls = calculateNumberOfWays($arr[1], $possibleWaysToPair);

  $combinations = ($numberOfWaysForBoys * $numberOfWaysForGirls) * $possibleWaysToPair;

  return $combinations;
}
