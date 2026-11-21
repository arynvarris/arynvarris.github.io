<!DOCTYPE html>
<html>
<head>
<title>Where Am I</title>
</head>
<body>

<h1>This page figures out its whereabouts</h1>

<?php

// Finds the full path of the current directory
$fullPath = __DIR__;

// Gets the name of the folder from the full path (Lab13)
$base = basename($fullPath);

// Calls the function to get the number
$weekNr = extractWeekNumber($fullPath);

echo "The full file path: <br>";
echo $fullPath;

echo "<br><br>";

echo "The base name: <br>";
echo $base;

echo "<br><br>";

echo "Week number is " . $weekNr;

?>


<?php

// Function that gets the week number from a folder path
function extractWeekNumber($path) {

    // Gets the folder name from the path
    $base = basename($path);

    // Splits the folder name at "Lab"
    $parts = explode("Lab", $base);

    // Gets the number after "Lab"
    $weekNrString = $parts[1];

    // Checks if the string is a number
    if (is_numeric($weekNrString)) {

        // Converts string to integer
        $weekNr = (int)$weekNrString;

        return $weekNr;
    }

    return 0;
}

?>

</body>
</html>
