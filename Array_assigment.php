<?php
// ASSIGNMENT
/*
1. Write a PhP script that displays "My name is Kelcy, I'm 20years old and 126cm tall" from an array below.
$kelcy = [
  $name => 'Kelcy',
  $age => 20,
  $height => 126 
];
*/
// SOLUTION
// creating an array

$kelcy = [
    $name = 'Kelcy',
    $age = '20 years',
    $height = '126 cm' 
  ];
echo"<br>";
print_r($kelcy);
echo"<br>";
echo "My name is $kelcy[0], I'm $kelcy[1] old and $kelcy[2] tall";
/*
// alternatively

echo"<br>";
$kelcy = [
  $name => 'Kelcy',
  $age => 20,
  $height => 126 
];

echo"<br>";
print_r($kelcy);
echo"<br>";
echo "My name is $kelcy[0], I'm $kelcy[1] old and $kelcy[2] tall";

*/
/*
2. Write a PHP Script that decodes the following JSON string
{"Title": "The Double Sword",
"Author": "Robert Jenk",
"Detail": {
  "Publisher": "Little Brown"
}}
send to my email -  erick@riconets.com
 */
//SOLUTION
$book = [
$Detail = ["Publisher" => "Little Brown"],
["Title" => "The Double Sword"],
["Author" => "Robert Jenk"]
 
];

echo"<br>";
var_dump($book);

echo"<br>";
var_dump(json_encode($book));

echo"<br>";
print_r(json_encode($book));



?>