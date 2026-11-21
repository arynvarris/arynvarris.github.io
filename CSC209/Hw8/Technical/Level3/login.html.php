<!DOCTYPE html>
<html>
<head>
    <title> Login Page </title>
    <!-- Connects to CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1> Login Page </h1>

<!-- PHP Form Handling, sends the entered username and password to login.php for verification -->
<h4>Use admin to access admin page.</h4>
<form action="login.php" method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>

</body>
</html>