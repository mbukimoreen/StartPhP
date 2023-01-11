<?php

//  Exercise
 // Write a script in php to construct the following pattern

 /*
 1
 2 3
 4 5 6
 7 8 9 10
   */

  //  hint: printf();
// Solution

$m = 4;
$row;
$col;
$count = 1;
$num;


for ($row = 1 ; $row <= $m; $row ++)
 { 
  $num = 1;

  for ($col = 1; $col <= $count ; $col++) { 
    
     $num ++;
     
    } 
    $count++;
    echo "<br>";
  }

 

// Use the keys within the loop for an associative array

 //  hint: printf();