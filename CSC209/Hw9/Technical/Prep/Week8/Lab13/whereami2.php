
<?php

// Include the external PHP library
include "php/myLib.php";

// Find the current folder
$fullPath = __DIR__;

// Call the function from myLib.php
$weekNr = extractFolderNumber($fullPath);

?>

<!DOCTYPE html>
<html>
<head>
<title>Week <?php echo $weekNr; ?></title>
</head>
<body>

<h1>This is work for Week <?php echo $weekNr; ?></h1>

</body>
</html>
