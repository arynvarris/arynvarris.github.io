<!DOCTYPE html>
<html>
    <head>
        <title>Where Am I 2</title>
    </head>
<body>

<?php

// PHP Include Files
// Gets access to the external PHP file
include "external.php";

// W3Schools PHP Functions
// Cets the week number from the current folder
$weekNr = extractWeekNumber(realpath(__DIR__));

?>

<!-- Displays the week number inside the heading -->
<h1> This is work for Week <?php echo $weekNr; ?></h1>

</body>
</html>