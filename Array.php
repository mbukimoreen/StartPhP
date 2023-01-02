
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


// ARRAY FUNCTIONS

 echo "<br>";
echo "######################### <br>";
$simpearray = [1,2,3,4];
var_dump( $simpearray);

// alternatively
$simpearray = array(1,2,3,4);
var_dump( $simpearray);

echo "<br>";
echo "######################### <br>";

$fruit = array('apple','banana','orange');

// get the array length
echo count($fruit);

// search
echo in_array('banana', $fruit);

echo "<br>";
echo "######################### <br>";

// Adding an elememt into an array
array_push($fruit, 'mango','pepper');
var_dump($fruit);

echo "<br>";
echo "######################### <br>";

// adding an element at the beginning 
 array_unshift($fruit, 'kiwi');
 var_dump($fruit);


 // remove an element in a an array
 echo "<br>";
 echo "######################### <br>";

 array_pop($fruit); // removes the last element in our array

 array_shift($fruit); // removes the first element
 print_r($fruit);

echo "<br>";
echo "######################### <br>";
// removing a specific element in an array
unset($fruit[3]);
print_r($fruit);

// split into chunks of 2 
$chunkarray = array_chunk($fruit, 2);

// concantenate array
 $arr1= array(1,2,3);
 $arr2 = array(5,6,7);

 $arr3 = array_merge($arr1, $arr2);
 print_r($arr3);

// Using spread
echo "<br>";
echo "######################### <br>";

$arr4 = [...$arr1,...$arr2];
print_r($arr4);


// Combine kes and values
echo "<br>";
echo "######################### <br>";
$n =[ 'green','red','yellow'];
$m =[ 'raw pepper','apple','banana'];
$k = array_combine($n,$m);
print_r($k);

$keys = array_keys($k);
print_r( $keys);

echo "<br>";
echo "######################### <br>";
// flip keys with values
$flipped = array_flip($k);
print_r($flipped);

echo "<br>";
echo "######################### <br>";
// Array with a range

$newnubers = range(1, 20);
print_r($newnubers);

echo "<br>";
echo "######################### <br>";
// Mapping 

$mappedno = array_map(function($nubers){ 
  return "Number $nubers";

}, $newnubers);
print_r($mappedno);

echo "<br>";
echo "######################### <br>";
// filter an array

$lessthan10 = array_filter($newnubers, fn($nubers) => $nubers < 10);
print_r($lessthan10);


echo "<br>";
echo "######################### <br>";
// chznge key case
// has to be an associative array

$seasons = array('summer' => '1000', 'winter' => '2000','spring' => '3000', 'autumn' => '4000');
$newseasons = array_change_key_case($seasons,  CASE_UPPER);
print_r($newseasons);

echo "<br>";
echo "######################### <br>";
// count in array

 echo count($seasons);


 
 echo "<br>";
 echo "######################### <br>";
 //Sorting array

 sort($seasons);
 foreach($seasons as $season){
   echo"$season<br>";
 }

 $days = array('Monday','Tuesday','Wednesday','Thursday','Friday' );
 //print_r($days);
 sort($days);
  foreach($days as $day){
    echo"$day<br>";
  }
/*
  echo "<br>";
  echo "######################### <br>";

  $reverseDays = array_reverse($days);

  foreach($days as $day){
    echo"$day<br>";
  }
*/

  echo "<br>";
  echo "######################### <br>";

  $animal =array('dog','cat','goat','rat');
  $key = array_search('dog',$animal);
  echo $key;

  echo "<br>";
  echo "######################### <br>";
  $team1 =array('John','Janet','Joseph','Val');
  $team2 =array('James','Val','linet','John');

  $intersectedArrays = array_intersect($team1, $team2);

  foreach($intersectedArrays as   $intersectedArray){
    echo"$  $intersectedArray<br>";

  }
  