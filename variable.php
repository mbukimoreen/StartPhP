<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers 5.2
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ ) 
- Variables are case-sensitive ($name and $NAME are two different variables)
*/



// Adding Strings to variables
$name = "John Doe";
$age = 26;
$height = "126cm";

echo "<br>";
echo $name;
echo "<br>";
echo $age;
echo "<br>";
echo $height;
echo "<br>";

echo "My name is $name with $height, I'm $age years old";
echo "<br>";

// Using Double Quotes
echo "My name is $name with $height, I'm $age years old";
echo "<br>";

// Always do it this way
echo "My name is {$name} with {$height}, I'm {$age} years old";
echo "<br>";

// Concatenate incase of single quotes using . 
echo 'My name is'. $name .'with' .$height.', '.'I\'m'. $age. 'years old';
echo "<br>";

// Arithmetic operators + - / * %

$num1 = 200;
echo "<br>";
$num2 = 45;
echo "<br>";
$result =$num1 *$num2;
echo $result;
echo "<br>";


// Constants - cannot be changed.
?>