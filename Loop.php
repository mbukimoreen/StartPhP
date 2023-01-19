// There are variouus type of loops usednin PHP



<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/


echo "######################################################<br>";
for($x=0; $x <= 10; $x++){

    echo"Number : $x <br>";

}


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
echo "######################################################<br>";

$i=1;
while ($i <= 10) {
    echo "Number $i <br>";
     $i++;
}



/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);
do...while loop will always execute the block of code once, even if the condition is false.
*/

echo "######################################################<br>";

$a = 2;
do {
   echo "Number : $a <br>";
   $a += 2;
} while ($a <= 10);

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/
echo "######################################################<br>";

// Loop through an array

$numbers = [1,2,3,4,5];
foreach ($numbers as $number) {
   echo "Number : $number <br>";
}

echo "######################################################<br>";

// Use the indexes within the loop
$posts = ["post one", "post two", " post three"];
foreach ($posts as $index => $post) {
    echo"${index} - ${post} <br>";
    
    
}
echo "######################################################<br>";

// Use the keys within the loop for an associative array
$person = [
  'first_name' => 'John',
  'last_name' => 'Doe',
  'email' => 'johndoe@yahoo.com'
];

echo"######################################################<br>";

// Get the Keys
foreach ($person as $key => $value) {
   echo "${key} > ${value} <br>";
}

echo "######################################################<br>";

// Write a script in php to construct the following pattern
/*
*
**
***
****
*****
 */


 for ($m = 1; $m <= 5; $m++) { 
  for ($n = 1; $n <= $m ; $n++) { 
    echo "*";
    if($n < $m){
      echo " ";
    }
  }
  echo "<br>";
 }

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


for ($row = 1 ; $row <= $m; $row ++) { 
  $num = 1;

  for ($col = 1; $col <= $count ; $col++) { 
    
     $num ++;
     
    }
    $count++;
  }
  echo "<br>";

// Use the keys within the loop for an associative array

 //  hint: printf();
/*
 $m = 4;
 $count = 1;
 echo "m = " . $m . "<br>";
  for($row = $m; $row > 0; $row--){
   for($col = $row; $col <= $row; $col++){
     printf("%4s", $count);
     $count++;
   }
   echo '<br>';
  }
 
   */

// Get the Keys