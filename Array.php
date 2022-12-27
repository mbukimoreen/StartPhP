
<?php
/* ----------- Arrrays ----------- */
 // data structures that store one or more similar typebof values in a single variable

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

// simple array of numbers

$numbers = [1,2,3,4,5];
var_dump($numbers);
echo "<br>";
print_r($numbers);
echo "<br>";

// simple array of strings

$colors =["red", "blue","green"];
print_r($colors);
echo "<br>";

// how to display a single element from our array
echo "<br>";
echo"#########################";
echo "<br>";
echo $numbers[2];

echo "<br>";
echo"#########################";
echo"<br>";
echo $numbers[1] + $numbers[2];

// types of arrays 
/* Associative Array
Allows us to use named key to identify values
*/
echo "<br>";
$colors = [
  1 => "red",
  2 => "blue",
  3 => "green"
];
 
echo $colors[1];

echo "<br>";
echo"#########################";
echo"<br>";

//strings as key
//RGB

$hex = [
  "red" => "#FF0000",
  "green" =>"#00FF00",
  "blue" => "0000FF"


];

echo $hex["green"];
echo "<br>";
echo"#########################";
echo"<br>";

var_dump($hex);

/* Multi- Dimentional Array
often used to store data in a table format

*/
$person1 =[
  'first_name' => 'John',
  'last_name' => 'Doe',
  'email' => 'johndoe@yahoo.com'

];

$people =[
  $person =[
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'johndoe@yahoo.com'
  
  ],

 [ 'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'janedoe@yahoo.com'
],

['first_name' => 'Kim',
    'last_name' => 'Doe',
    'email' => 'kimdoe@yahoo.com'
  ]

  
];

echo "<br>";
echo"#########################";
echo"<br>";
var_dump($people);
echo"<br>";
echo"#########################";
print_r($people);


echo "<br>";
echo "######################### <br>";

// Encoding in JSON (JavaScript Object Notation)

var_dump(json_encode($people));
echo "<br>";
echo "######################### <br>";
print_r(json_encode($people));


// ASSIGNMENT

/*
1. Write a PhP script that displays "My name is Kelcy, I'm 20years old and 126cm tall" from an array below.
$kelcy = [
  $name => 'Kelcy',
  $age => 20,
  $height => 126 
];
2. Write a PHP Script that decodes the following JSON string
{"Title": "The Double Sword",
"Author": "Robert Jenk",
"Detail": {
  "Publisher": "Little Brown"
}}
send to my email -  erick@riconets.com
 */




// ASSIGNMENT 
/*
1. Write PHP that displays the 'My name is Kelcy, I'm 20 years old and 126cm tall from an array below.

$Kelcy = [
  $name => 'Kelcy',
  $age => '20 years',
  $height => '126cm'
];

2. Write a PhP Script that decode the followimg JSON string
(Associative array)
{"Title": "The Double Sword",
:}

*/

