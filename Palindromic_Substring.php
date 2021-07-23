<?php 
  
function PalindromicSubstring($str) {

      $maxxy = 0;
      
	    $maxLength = 0;
      
	    $arr = [];
      
	    $newStr = "^#" . implode("#", str_split($str)) . "#\0";
      
	    for ($i = 2; $newStr[$i] != "\0"; $i++) {
      
	        $arr[$i] = 1;
          
	        while ($newStr[$i - $arr[$i]] == $newStr[$i + $arr[$i]]) {
          
	            $arr[$i]++;
	        }
          
	        if ($arr[$i] > $maxLength) {
	            $maxLength = $arr[$i];
	            $maxxy = $i;
	        }
	    }
      
	    $res = substr($newStr, $maxxy - $maxLength + 1, $maxLength * 2 - 1);
      
	    $output = str_replace('#', "", $res);
    
      return $output > 2 ? $output : 'none';
}
