<?php
/*
Given an array and a target number, write a function that returns the first subarray whose addition will be equal to the target number.

Example

solution([3,4,3,5,6,], 10) => [3,4,3]

solution([8,2,6,2,5,6], 39) => []
*/
function solution(array $arr, $num){
  $temp = 0;
  $output = [];
  for($i=0; $i<count($arr); $i++)
    {
      if($i > 1)
            {
              $temp += $arr[$i];
            }else{
              $temp = $arr[$i] + $arr[$i+1];
            }
      if($temp == $num)
            {
              $output = ($i==0) ? array_slice($arr, 0, 2) : array_slice($arr, 0, ($i+1));
              break;
            }
      continue;
    }
  //return ($output == 0) ? "false" : "true";
  return $output;
}

$test1 = [3,4,3,5,6,];
print_r(solution($test1, 25));