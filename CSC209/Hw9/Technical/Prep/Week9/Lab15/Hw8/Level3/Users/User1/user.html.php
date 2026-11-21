
<?php

// W3Schools PHP Sessions - Starts or resumes the session
session_start();

// Checks that the user is logged in
if (!isset($_SESSION["username"])) {
    header("Location: ../../login.html.php");
    exit();
}

// Gets the user number from the folder name
$folderName = basename(__DIR__);
$userNumber = (int) str_replace("User", "", $folderName);

// Checks that the logged-in user matches this folder
if ($_SESSION["userNumber"] != $userNumber) {
    header("Location: ../../login.html.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Page</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>

<!-- W3Schools PHP Sessions - Displays the logged-in username -->
<h1>Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1>

<!-- W3Schools PHP Sessions - Displays the password for this assignment -->
<p>Your password is: <?php echo htmlspecialchars($_SESSION["password"]); ?></p>

<!-- Sends the user number and time logged in to logout.html.php -->
<form action="../../logout.html.php" method="post" onsubmit="timeLoggedIn()">

    <input type="hidden" name="userNumber" value="<?php echo $userNumber; ?>">

    <input type="hidden" id="minutes" name="minutes" value="0">

    <input type="submit" value="Logout">

</form>

<script src="../../time.js"></script>

</body>
</html>
