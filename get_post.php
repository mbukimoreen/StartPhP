<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>

<a href="<?php echo $_SERVER["PHP_SELF"] ?>?username=mbuki">Link</>
<br><br>

  <form action="<?php echo $_SERVER["PHP_SELF"] ; ?><" method="post"></form>
    <label for="Username"> Username:</label>
    <input type="text" name="username" id=" userName">
    <br> <br>
    <label for="Password">Password:</label>
    <input type="password" name="password" id="pwd">
    <br> <br>
    <input type="submit" value="Submit">
    <input type="reset" value="Clear Form">


   </form> 
</body>
</html>