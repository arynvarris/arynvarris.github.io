<!DOCTYPE html>
<html>
<head>
    <title>User Page</title>

    <!-- Connects to the CSS file -->
    <link rel="stylesheet" href="../../style.css">
</head>

<body>

<?php

// Function that will get the user number from a folder name
function extractFolderNumber($path) {

    // basename() Function gets the folder name from the full directory path
    $folder = basename($path);

    // str_replace() Function removes "User" from the folder name, leaving the number
    $number = str_replace("User", "", $folder);
    return $number;
}

// Magic Constant __DIR__ gets the current folder path and extracts its user number
$userNumber = extractFolderNumber(__DIR__);

?>

<h1> Welcome User <?php echo htmlspecialchars($userNumber); ?>!</h1>

<p> You are now logged in. </p>

<!-- Form Handling, sends the user number and minutes to the logout page -->
<!-- onsubmit calls the JavaScript timer before sending the form -->
<form action="../../logout.html.php" method="post" onsubmit="timeLoggedIn()">

    <!-- input type="hidden" -->
    <!-- Sends the user number without displaying an input box -->
    <input type="hidden" name="userNumber" value="<?php echo htmlspecialchars($userNumber); ?>">

    <!-- JavaScript fills in this value with the minutes logged in -->
    <input type="hidden" id="minutes" name="minutes" value="0">

    <input type="submit" value="Logout">

</form>

<!-- Connects to the function that calculates minutes logged in -->
<script src="../../time.js"></script>

</body>
</html>