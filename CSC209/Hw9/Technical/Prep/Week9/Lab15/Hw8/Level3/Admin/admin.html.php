
<?php

// W3Schools PHP Sessions - Starts the session
session_start();

// Only allows the admin to access this page
if (!isset($_SESSION["username"]) || $_SESSION["username"] != "admin") {
    header("Location: ../login.html.php");
    exit();
}

// W3Schools PHP file_get_contents() and json_decode()
// Reads users.json and converts the JSON into a PHP array
$jsonContent = file_get_contents("../users.json");
$data = json_decode($jsonContent, true);

// Sets username as the default column to sort
$sort = "username";

// W3Schools PHP $_GET and isset()
// Gets the column name from the URL
if (isset($_GET["sort"])) {
    $sort = $_GET["sort"];
}

// Makes sure the selected column exists
if ($sort != "username" && $sort != "loggedtimes" && $sort != "loggedminutes") {
    $sort = "username";
}

// Creates an array for sorting
$sortValues = array();

// Gets the values from the selected column
foreach ($data as $i => $user) {
    $sortValues[$i] = $user[$sort];
}

// W3Schools PHP Sorting Arrays - asort()
// Sorts the selected column in ascending order
asort($sortValues);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="../style.css">
    <script src="../script.js"></script>
</head>

<body>

<h1>Admin Page</h1>

<h2>User Login Information</h2>

<table>
    <tr>
        <th onclick="sortTable('username')">Username</th>
        <th onclick="sortTable('loggedtimes')">Times Logged In</th>
        <th onclick="sortTable('loggedminutes')">Minutes Logged In</th>
    </tr>

    <?php
    // Displays each user in the sorted order
    foreach ($sortValues as $i => $value) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($data[$i]["username"]) . "</td>";
        echo "<td>" . $data[$i]["loggedtimes"] . "</td>";
        echo "<td>" . $data[$i]["loggedminutes"] . "</td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>
