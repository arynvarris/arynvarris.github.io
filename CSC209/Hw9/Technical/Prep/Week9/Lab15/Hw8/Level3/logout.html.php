
<?php

// W3Schools PHP Sessions - Starts the session before ending it
session_start();

// $_POST and isset() Function checks if the logout form sent the user number and minutes
if (isset($_POST["userNumber"]) && isset($_POST["minutes"])) {

    // Casting (int) converts the submitted values into integers
    $userNumber = (int) $_POST["userNumber"];
    $minutes = (int) $_POST["minutes"];

    // Checks that the user number matches the logged-in session
    if (isset($_SESSION["userNumber"]) &&
        $_SESSION["userNumber"] == $userNumber &&
        $userNumber >= 1 && $userNumber <= 5 && $minutes >= 0) {

        // Reads users.json and converts its JSON text into a PHP array
        $jsonContent = file_get_contents("users.json");
        $data = json_decode($jsonContent, true);

        // Subtracts 1 as PHP array indexes start at 0
        $i = $userNumber - 1;

        // Adds the time from this login to the user's total minutes
        $data[$i]["loggedminutes"] = $data[$i]["loggedminutes"] + $minutes;

        // json_encode converts the updated PHP array back into JSON text
        $newJson = json_encode($data);

        // file_put_contents() function saves the updated minutes back into users.json
        file_put_contents("users.json", $newJson);

        // Displays a goodbye message using echo
        echo "<h1>Goodbye!</h1>";
        echo "<p>You were logged in for " . $minutes . " minute(s).</p>";

        // W3Schools PHP Sessions - Clears and destroys the session
        session_unset();
        session_destroy();

    } else {
        echo "<p>Invalid logout information.</p>";
    }

} else {
    echo "<p>No logout information was submitted.</p>";
}

?>

<!-- Lets the user return to the login page -->
<p><a href="login.html.php">Return to Login</a></p>
