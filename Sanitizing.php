<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/

if (isset($_POST['submit'])) {
  $username = $_POST['email'];
  $email = $_POST['email'];

  // htmlspecialchars() - Convert special characters to HTML entities
   $username = htmlspecialchars($_POST['username']);
   $email = htmlspecialchars($_POST['email']);

  // filter_var() - Sanitize data
   $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

  // filter_input() - Sanitize inputs
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

  // FILTER_SANITIZE_STRING - Convert string to string with only alphanumeric, whitespace, and the following characters - _.:/
  // FILTER_SANITIZE_EMAIL - Convert string to a valid email address
  // FILTER_SANITIZE_URL - Convert string to a valid URL
  // FILTER_SANITIZE_NUMBER_INT - Convert string to an integer
  // FILTER_SANITIZE_NUMBER_FLOAT - Convert string to a float
  // FILTER_SANITIZE_FULL_SPECIAL_CHARS - HTML-encodes special characters, keeps spaces and most other characters
} ?>

<!-- Pass data through a form -->
<!-- php_self can be used for xss -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sanitizing Inputs </title>
</head>
<body>
<!-- Passing Data through a form -->
<h1>Sanitizing Data in Forms </h1>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<div>
  <label for="Username">Username:</label>
  <input type="text" name="username" id="username" required>
</div>
<br>
<?php echo $email; ?>
<div>
<label for="Email">Email Add:</label>
<input type="email" name="email_address" id="email" required>
</div>
<br>
<input type="submit" value="Submit">
</form>
</body>
</html>




