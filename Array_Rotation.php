<?php

function ArrayRotation($arr) {

  $arrFirstIndex = $arr[0];

  $arrLastIndex = count($arr) - 1;

  $prefixArr = array_slice($arr, 0, $arrFirstIndex);

  $suffixArr = array_slice($arr, $arrFirstIndex, $arrLastIndex);

  $rotation = implode( '', array_merge($suffixArr, $prefixArr));

  return $rotation;

}
