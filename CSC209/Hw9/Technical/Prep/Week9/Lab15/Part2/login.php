
<?php

// W3Schools: PHP Sessions
// https://www.w3schools.com/php/php_sessions.asp
// Starts the session so user information can be remembered on another page.
session_start();


// W3Schools: PHP Functions, PHP and JSON
// This function checks whether the username and password match a user in the array.
// Returns the user's array index if found, or -1 if no match is found.
function checkLogin($username, $password, $data) {

    foreach ($data as $i => $user) {

        if ($user["username"] == $username && $user["password"] == $password) {
            return $i;
        }

    }

    return -1;
}


// W3Schools: PHP $_POST and isset()
// https://www.w3schools.com/php/php_superglobals_post.asp
// Checks whether the login form submitted both username and password.
if (isset($_POST["username"]) && isset($_POST["password"])) {

    // Gets the username and password submitted from the form.
    $username = $_POST["username"];
    $password = $_POST["password"];


    // W3Schools: PHP Filesystem Functions
    // https://www.w3schools.com/php/php_ref_filesystem.asp
    // Reads the contents of users.json into a string.
    $jsonContent = file_get_contents("users.json");

    if ($jsonContent === false) {
        die("Unable to read users.json");
    }


    // W3Schools: PHP and JSON
    // https://www.w3schools.com/php/php_json.asp
    // Converts the JSON text into a PHP associative array.
    $data = json_decode($jsonContent, true);

    if (!is_array($data)) {
        die("Invalid JSON data.");
    }


    // Calls the function to find a user with matching credentials.
    $i = checkLogin($username, $password, $data);


    // W3Schools: PHP If...Else
    // If the returned index is -1, no matching user was found.
    if ($i == -1) {

        echo "<h2>Login Failed</h2>";
        echo "<p>Incorrect username or password.</p>";
        echo '<a href="login.html.php">Return to Login</a>';

    } else {

        // W3Schools: PHP Arithmetic Operators
        // Increases this user's number of successful logins by one.
        $data[$i]["loggedtimes"] = $data[$i]["loggedtimes"] + 1;


        // W3Schools: PHP and JSON
        // Converts the updated PHP array back into JSON text.
        $newJson = json_encode($data, JSON_PRETTY_PRINT);


        // W3Schools: PHP File Create/Write
        // https://www.w3schools.com/php/php_file_create.asp
        // Opens users.json for writing.
        // "w" overwrites the old JSON file with the updated JSON data.
        $myfile = fopen("users.json", "w") or die("Unable to open file!");

        // W3Schools: PHP fwrite()
        // Writes the updated JSON text into users.json.
        fwrite($myfile, $newJson);

        // W3Schools: PHP fclose()
        // Closes the file after writing.
        fclose($myfile);


        // W3Schools: PHP Sessions
        // Stores the logged-in user's username and updated login count.
        $_SESSION["username"] = $data[$i]["username"];
        $_SESSION["loggedtimes"] = $data[$i]["loggedtimes"];


        // PHP header() redirects the browser to the user's page.
        header("Location: user.html.php");

        // Stops running login.php after redirecting.
        exit();

    }

} else {

    echo "<p>No login information was submitted.</p>";
    echo '<a href="login.html.php">Return to Login</a>';

}

?>
