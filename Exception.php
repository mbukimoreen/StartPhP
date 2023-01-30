<?php

/* ----------- Exceptions ----------- */

/*
  PHP has an exception model similar to that of other programming languages. An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.
*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function inverse($x){
    if(!$x){
        throw new Exception('Division by Zero!');
    }
    return 1/$x;
}

// echo inverse(0); // Causes an exception to be thrown and stops script execution

// Handles the exception
// try {
//   echo inverse(50) . ' ' . '<br>';
//   echo inverse(0) . ' ';
//   echo inverse(10) . ' ';
// } catch (Exception $e) {
//   echo 'Caught an exception: ',  $e -> getMessage(), ' ';
// }

// Finally block is executed regardless of whether an exception is thrown or not
try {
    echo inverse(5). " " . "<br>";
    echo inverse(0). " ";
} catch (Exception $e) {
    echo 'Caught an exception: ', $e -> getMessage() . "<br>";
} finally {
    echo 'First finally'. "<br>";
}


try {
    echo inverse(0). " ";
} catch (Exception $e) {
    echo 'Caught an exception: ', $e -> getMessage() . "<br>";
} finally {
    echo 'Second finally'. "<br>";
}

echo 'Hello, class.';