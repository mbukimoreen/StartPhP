<?php

/* -------------COOKIES----------*/
/*
Sometimes called Browser Cookies, small pieces of data that a web server ask the client's web browser to store. Data in cookies is organized as key/value pair
1. set
2. get
3. delete
setcookie()
 */
setcookie('Language', 'English');

// echo $_COOKIE['Language'];

$lang = 'language';
$value = 'english';
$expire = time() + 60 * 60 * 24 * 3; // 3 days from now
$path = '/blog';
$domain = 'www.yourwebsite.com';
$secure = isset($_SERVER['HTTPS']);
$httponly = true;


setcookie($lang, $value, $expire, $path, $domain, $secure, $httponly);

// Set
$t = time();
setcookie('names', 'Erick', $t + 86400 * 30);

echo $t; //1674060325 - current time in seconds since Jan 1 1970 0000HRS
echo '<br>';
echo(date("Y-m-d", $t));
echo '<br>';

// Get a cookie
if (isset($_COOKIE['names'])) {
    echo $_COOKIE['names'];
}

// Delete a cookie
setcookie('names', '', time() - 86400 );