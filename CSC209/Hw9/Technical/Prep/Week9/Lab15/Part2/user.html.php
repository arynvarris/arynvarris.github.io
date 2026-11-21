
<?php

// W3Schools: PHP Sessions
// https://www.w3schools.com/php/php_sessions.asp
// Resumes the session started by login.php.
session_start();


// W3Schools: PHP isset()
// Checks that a user has successfully logged in.
if (!isset($_SESSION["username"])) {

    header("Location: login.html.php");
    exit();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Page</title>
</head>

<body>

<h1>Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1>

<p>Username: <?php echo htmlspecialchars($_SESSION["username"]); ?></p>

<p>Times Logged In: <?php echo $_SESSION["loggedtimes"]; ?></p>

<a href="login.html.php">Return to Login</a>

</body>
</html>
