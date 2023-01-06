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


// Use the indexes within the loop




// Use the keys within the loop for an associative array



// Get the Keys