<?php
/* ------------ Functions ----------- */
/*
 A piece of code which takes in one or more input in form of a parameter, processes it and return a value.
 */
/*
** Function Syntax
  function function_name($arg1, $arg2, ...) {
    // code to be executed
  }
  - Functions have their own local scope as opposed to global scope
*/

$names = 'Annete Kimtai';
$age = 28;

function register_user(){
  echo 'User has been registered!';
}
// Running a function

// register_user();

// Adding params
function create_user($username){
  echo "User ${username} has been created!";
}

// Pass in an argument
// create_user('JohnDoe');

// Returning values
function add($num1, $num2){
  return $num1 + $num2;
}
$sum = add(15, 90);
// echo $sum;

// Adding default values
function subtract($dig1 = 10, $dig2 = 5){
  return $dig1 - $dig2;
}
// echo subtract();

// Assigning anonymous functions to variables. Often used for closures and callback functions

$modulo = function($r, $k){
  return $r % $k;
};

// echo $modulo(9, 3). "<br>";

// Arrow functions

$multiply = fn($number1, $number2) => $number1 * $number2;

// echo $multiply(8, 10);


// global
function good_morning(){
  global $names;
  echo $names;
}
$names = 'Amos Lupita';

good_morning();