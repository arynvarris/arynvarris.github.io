<?php
// PHP file_get_contents() and json_decode() reads the JSON file and converts it into a PHP array
$jsonContent = file_get_contents("users.json");
$data = json_decode($jsonContent, true);

// Variable that sets Username as the default column to sort by
$sort = "username";

// Checks if the username table header was clicked and then gets its column name from the URL
if (isset($_GET["sort"])) {
    $sort = $_GET["sort"];
}

// PHP If...Else makes sure the selected value is either username, password, or loggedtimes, confirmed with users.json
if ($sort != "username" && $sort != "password" && $sort != "loggedtimes") {
    $sort = "username";
}

// Initializes an array to be used in the foreach loop
$sortValues = array();

// Foreach loop creates an array with the values from that selected column
foreach ($data as $i => $user) {
    $sortValues[$i] = $user[$sort];
}

// Uses asort() to sort the selected columns data in ascending order
// Keeps the original array keys while sorting
asort($sortValues);

?>