<?php

$string = "hello to you";
echo $string;

echo "<br>";

// to check the length of the string
echo strlen($string);

echo "<br>";
// words count
echo str_word_count($string);

echo "<br>";
// replacing words in a string
echo str_replace("hello", "good", $string);

echo "<br>";
//  string shuffle
echo str_shuffle($string);

echo '<br>';

//  string
echo str_contains( $string, "to");

echo '<br>';
/*
https://www.php.net/manual/en/ref.strings.php
 */

$string1 = 'Buenas tough Programmers';

// Get the length of a string
 echo strlen($string1);

 echo '<br>';
// Find the position of the first occurrence of a substring in a string

echo strpos($string1, 'o');

echo '<br>';
// Find the position of the last occurrence of a substring in a string
 echo strrpos($string1, 'o');

 echo '<br>';
// Reverse a string
 echo strrev($string1);
 
 echo '<br>';
// Convert to lowercase
 echo strtolower($string1);

 echo '<br>';
// Convert to UPPERCASE
echo strtoupper($string1);

echo '<br>';
// Convert to title case
echo ucwords($string1);

echo '<br>';

// Replacing strings
 echo str_replace('World', 'Everyone!', $string1);

 echo '<br>';
// Return the portion of a string specified by the offset and length
 echo substr($string1, 5);

 echo '<br>';

// starts with
if (str_starts_with($string1, 'Hello')) {
     echo 'YES, it does!';
}else{
     echo 'NO! Kindly check again.';
}

echo '<br>';
// ends with
if (str_ends_with($string1, 's')) {
     echo "Yes, it actually does!";
}else{
    echo 'NO! Sorry, we couldn\'t see that';
}
echo '<br>';

// contains (write your code below and submit file only)
// Solution

echo str_contains($string1, "tough " );

echo '<br>';

// HTML Entities
$string2 = "<h1> Hello Class</h1>";
echo htmlentities($string2);

echo '<br>';
// Formatted strings
printf('%s is a %s', 'Tommy', 'great comedian');

printf('1 + 1 = %f', 1 + 1); // float

echo '<br>';

$string3 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga modi nobis dolorem corrupti ea quam stupid reiciendis ut labore quo in delectus, earum explicabo nesciunt iusto inventore consectetur aliquam vero. Molestias.";

echo str_word_count($string3);
echo '<br>';

if (str_contains($string3, 'stupid')) {
    echo 'Your response is too vulgar!';
}else{
    echo "Proceed!";
}
echo '<br>';
 echo strlen($string3);
