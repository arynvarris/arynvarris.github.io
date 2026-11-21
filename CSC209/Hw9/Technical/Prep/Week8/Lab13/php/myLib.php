
<?php

// Extracts the number at the end of a folder name
function extractFolderNumber($path) {

    // Get the folder name
    $base = basename($path);

    // Extract the number from the end of the folder name
    $number = "";

    for ($i = strlen($base) - 1; $i >= 0; $i--) {

        if (is_numeric($base[$i])) {
            $number = $base[$i] . $number;
        } else {
            break;
        }
    }

    // Convert the number to an integer
    return (int)$number;
}

?>
