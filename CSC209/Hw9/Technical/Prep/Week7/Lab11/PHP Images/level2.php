<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Images - Level 2</title>

    <style>
        /* Styling for images */
        img {
            width: 150px;
            height: auto;
            margin: 5px;
        }
    </style>
</head>

<body>

<h1>PHP Image Gallery</h1>

<!-- W3Schools: PHP Include Files -->
<!-- Includes the PHP file that finds and displays the images. -->
<?php
include 'slideshow.php';

echo $htmlContent1;
echo $htmlContent2;
?>
</body>
</html>