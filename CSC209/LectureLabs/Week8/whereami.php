<!DOCTYPE html>
<html>
<head>
<title>Where Am I</title>
</head>
<body>

<h1>This page figures out its whereabouts</h1>

<?php

// Finds the full path of the current directory
$fullPath = realpath(".");

// Gets the name of the folder from the full path (Week8)
$base = basename($fullPath);

// Splits the folder name at "Week"
$split = explode("Week", $base);

// Gets the number after "Week", week would be 0, 8 would be 1
$weekNrString = $split[1];

// Check if the character is a number
if (is_numeric($weekNrString)) {
    // Converts string to integer
    $weekNr = (int)$weekNrString;
}


echo "The full file path: <br>";
echo $fullPath;

echo "<br><br>";

echo "The base name: <br>";
echo $base;

echo "<br><br>";

echo "Week number is " . $weekNr;
?>

</body>
</html>