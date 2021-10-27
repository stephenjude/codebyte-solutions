<?php

function arrayRotation($arr): string 
{
  $arrFirstIndex = $arr[0];

  $arrLastIndex = count($arr);

  $prefixArr = array_slice($arr, 0, $arrFirstIndex);

  $suffixArr = array_slice($arr, $arrFirstIndex, $arrLastIndex);

  $rotation = implode( '', array_merge($suffixArr, $prefixArr));

  return $rotation;

}

//Try changing each item of the input array for different output
//You can get an idea of sample input from Array_Rotation.MD
$arr = [4,3,4,3,1,2];
echo arrayRotation($arr);