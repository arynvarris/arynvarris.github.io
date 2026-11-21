<?php

// PHP $_POST and isset() Function checks if the login form has been submitted
if (isset($_POST["username"]) && isset($_POST["password"])) {

    // PHP Variables and $_POST stores the username and password entered into the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Reads users.json and converts its contents into a PHP array
    $jsonContent = file_get_contents("users.json");
    $data = json_decode($jsonContent, true);

    // Starts with login variable/status set to false as no user has matched yet
    $login = false;

    // Loops through each user stored in users.json
    foreach ($data as $i => $user) {
        // Checks if both the username and password match the user
        if ($user["username"] == $username && $user["password"] == $password) {

            // Changes login variable/status to true when matching user is found
            $login = true;

            // Use arithmetic operator to add 1 to the number of this user's previous logins
            $data[$i]["loggedtimes"] = $data[$i]["loggedtimes"] + 1;

            // json_encode() Function converts the updated PHP array back into JSON text
            $newJson = json_encode($data);

            // file_put_contents() function writes the updated JSON text back into users.json
            file_put_contents("users.json", $newJson);

            // Displays a message confirming the successful login
            echo "<p>Login successful!</p>";

            // Breaks out of the if statement, stops looking through users is login is successful 
            break;
        }
    }

    // If else statement displays an error if login info was false, and no user was found
    if ($login == false) {
        echo "<p>Incorrect username or password.</p>";
    }
}

?>