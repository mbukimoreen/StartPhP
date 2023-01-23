<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

 echo " This is simple to capture your information which will be used to populate your CV";
 echo "<br>";
 echo "<br>";
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

<a href="<?php echo $_SERVER["PHP_SELF"] ?>?username=mbuki">Link</></a>
<br><br>

  <form action="<?php echo $_SERVER["PHP_SELF"] ; ?><" method="post"></form>
    <div>
      <label for="First name"> First name:</label>
    <input type="text" name="first name" id="firstName">
    </div>
    <br> <br>
    <div>
      <label for="Middle name">Middle name:</label>
    <input type="text" name="middle name" id=" middleName">
    </div>
    <br> <br>
    <div>
      <label for="Phone No">Phone No:</label>
    <input type="number" name="phone no" id="phoneNo">
    </div>
    <br> <br>
    <div>
      <label for="Email">Email:</label>
    <input type="email" name="email" id="">
    </div>
    <br> <br>
    <div>
      <label for="Username"> Username:</label>
    <input type="text" name="username" id=" userName">
    </div>
    <br> <br>
    <div>
      <label for="Date of birth"> Date of Birth: </label>
    <input type="date" name="date of birth" id="dateBirth">
    </div>
    <br> <br>
    <div>
      <label for="Password">Password:</label>
    <input type="password" name="password" id="pwd">
    </div>
  
    <br> <br>
    <div>
      <input type="submit" value="Submit">
    <input type="reset" value="Clear Form">
    </div>


   </form> 
</body>
</html>