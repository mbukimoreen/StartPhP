<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
  AND && OR ||
/*

** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/


$age = 20;
if ($age >= 18){
  echo "You are old enough to vote";
} else 
{
  echo " Sorry you are too young to vote";

}

/* ---------- If & If-Else Statements --------- */

echo "<br>";
echo "<br>";
echo "If Conditional and Dates<br>";
echo "###########################<br>";


$myage = 50;
if ($myage >= 18){
  echo "You are old enough to vote";
} elseif ($myage >= 90) 
{
  echo " You are too old to vote , please stay at home";

} elseif ($myage < 18)
{
  echo " Sorry you are too young to vote";
  
}
else
{
  echo "This is not a value";

}


echo "<br>";
echo "If Conditional and Dates<br>";
echo "###########################<br>";

$t = date("H");

if ($t < 12 )
{
  echo "Good Morning";

} elseif ($t < 17){
  echo "Good Afternoon";

} else
{ 
  echo "Good Evening";
}

echo "<br>";
echo "<br>";
echo "If Conditional and Dates<br>";
echo "###########################<br>";

// checking if array is empty
// we'll be using the isset() function, the empty

$post = ["Red","Green"," Blue"];
if (!empty($post[0])) 
{
echo $post[0];
} else
{
  echo "there is no posts in the blog!";
}


echo "<br>";
echo "If Conditional and AND / OR <br>";
echo "###########################<br>";

$a = true;
$b = true;

/* $a AND $b = true iff  both are true
   $a OR $b = true iff  one of them should be true
*/
 
echo $a && $b; 

echo "<br>"; 

echo $a || $b;


$gender = 'Male';
$height = 126;
$local = True;

if($gender == "Male" && $height == 126) 
{
  echo "You can climb a tree";

}elseif ($gender == "Female" &&  $local == True)
{
  echo " You come from around, go for it!";

}elseif ($gender == "Male" || $local == False)
{
  echo " We don\t that here";
} else 
{
  echo " Hello i didn\t get that well";
}


/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/
echo "<br>";
echo "If Conditional with Ternary Operator <br>";
echo "###########################<br>";

echo !empty($post[0])? $post[0] : "There are no post in this blog! ";

 echo "<br>";
$first_post = !empty($post[0]) ? $post[0] : "There are no POST ";
echo $first_post;



/* -------- Switch Statements ------- */

echo "<br>";
echo "If Conditional and AND / OR <br>";
echo "###########################<br>";

$favourite_color = " Maroon";




