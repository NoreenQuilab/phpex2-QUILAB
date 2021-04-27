<?php

//1
// Function  of a triangle edge,
function getLastEdgeMaxRange($side1, $side2)
{
 
  if ((!is_int($side1) || !is_int($side2)) || ($side1 <= 0 || $side2 <= 0)) {
    return "Invalid sides, sides must be integer greater than 0, Try Again";
  }

  // Get max length of triangle egd
  $result = $side1 + $side2 - 1;

  return $result;
}


//2
// binary 
function countAllOnes($num)
{
  // If number is not an integer or less than 1
  if(!is_int($num) || $num <= 0 ){
    return "Invalid number must be integer greater than 0, Try Again";
  }

  // Initialize count
  $count = 0;

  // Loop to nth and increase count 
  // if found 1 in binary
  while ($num) {
    $count += $num & 1;
    $num >>= 1;
  }

  return $count;
}

//3
// The 2 parts must be joined with “/” separator.
function joinParts($part1, $part2){
  // Replace all separator with ''
  $part1 = str_replace("/", "", $part1);
  $part2 = str_replace("/", "", $part2);

  // combination
  $result = $part1 . "/" . $part2;

  return $result;
}

//4
// Sastry number.
function isSastry($num)
{
  $result = "FALSE";

  // If number is not an integer or less than 1
  if(!is_int($num) || $num <= 0 ){
    return "Invalid number must be integer greater than 0, Try Again";
  }

  // sequence
  $num = $num . $num + 1;
  
  // Check if numbers is perfect squared
  $sr = sqrt($num);
  if(($sr - floor($sr)) == 0){
    $result = "TRUE";
  }

  return  $result;
}

?>