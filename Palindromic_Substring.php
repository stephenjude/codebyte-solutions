<?php 
  
function PalindromicSubstring($str) {
  $maximum = 0;
  $maxLength = 0;
  $arr = [];
  $newStr = "^#".implode("#", str_split($str))."#\0";

  for($index = 2; $newStr[$index] != "\0"; $index++){
    $arr[$index] = 1;
    
    while($newStr[$index - $arr[$index]]  == $newStr[$index + $arr[$index]]){
      $arr[$index]++;
    }

    if($arr[$index] > $maxLength){
      $maxLength = $arr[$index];
      $maximum = $index;
    }
  }

  $result = substr($newStr, $maximum - $maxLength + 1, $maxLength * 2 - 1);

  $output = str_replace('#', '', $result);

  return strlen($output) > 2 ? $output : 'none';
}
