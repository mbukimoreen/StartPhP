<?php
/* session  
 session are good way to store information (variables) to be used across multiple pages.
 Unlike cookies , session are stored on the server.

 We use cookies when the data is insensitive while session are used for sensitive data.

 session_start()
 session_unset()
 session_destroy()
*/

session_start(); // for accessing any session data

if (isset($_POST["submit"])) {
    $username = filter_input(INPUT_POST, "username",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "pwd",FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if ($username == "mbukim" && $password == "P@55w0rd)") {
       // Set session variable 
       $_SESSION["username"] = $username ;
       // Go to the dashboard
        header('Location: StartPhP\resource\dashboard.php');
    
    } else {
        echo "incorrect username or password! Please try again";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Form</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?><" method="POST">
    <div>
        <label for="username">Username: </label>
    <input type="text" name="username" id="username">
    </div>
    <br> <br>
    <div>
        <label for="password">Password:</label>
    <input type="password" name="password" id="password">

    </div>
    <br> <br>
    <input type="submit" value="Login ">

</form>
</body>
</html>