<?php
/**
 * Save user credentials to a file and display them.
 *
 * @param string $username The username from POST.
 * @param string $password The password from POST.
 * @param string $filePath Path to the file where credentials are stored.
 */
function saveUserCredentials($username, $password, $filePath = "../output/users.txt") {
    // Basic input validation
    if (!is_string($username) || !is_string($password)) {
        echo "Invalid input.";
        return;
    }

    // Display the welcome message
    echo "Welcome {$safeUsername}<br>";
    echo "Your password is: {$safePassword}<br>";


}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    saveUserCredentials($_POST["uname"] ?? "", $_POST["psw"] ?? "");
}
?>