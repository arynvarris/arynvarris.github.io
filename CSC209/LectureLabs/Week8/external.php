<?php

// Function that gets the week number from a folder path
function extractWeekNumber($path) {

    // Gets the folder name from the path
    $base = basename($path);

    // Splits the folder name at "Week"
    $parts = explode("Week", $base);

    // Gets the number after "Week"
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