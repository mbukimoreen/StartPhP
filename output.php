<?php
/* -------- Output & Comments ------- */

/*
  A .php file running on a server, can output both HTML and PHP code. 
  There are multiple functions that can be used to output data to the browser.
*/
// single line comment
// echo - output strings, numbers, html, etc
echo 'Hello class!';
echo '<br>';
echo 19*19;
echo '<br>';
echo '<h2> This is interesting </h2>';
echo '<br>';

// Using double quotes
echo " I'm going to school today to check out on my friends";
echo '<br>';
echo "<h3> This is HTML5 such a interesting language </h3>";
echo '<br>';

// print - Similar to echo, but slower
print "'what's up'";
echo '<br>';
print 'Happy birthday Sweetheart';

// print_r - gives more info - usually for arrays which is used to store datak
print_r(" We are excited to have you guys ");
echo '<br>';
print_r([1,3,5,6,7,8,9,0,3.2,2]);
echo '<br>';

// var_dump - even more info compared to print_r
var_dump("We are just pressing on with life");
echo '<br>';
var_dump([24,56,78,90,1,3,"Cool"]);

// escaping chars using backslash
echo '<br>';
echo "You're good?";
echo '<br>';
echo 'You\'re good ?'



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PhP inside Html</title>
</head>
<body>
  <p>write your php here</p>

  <br>

  <?php 

// some php here too

   ?>
</body>
</html>