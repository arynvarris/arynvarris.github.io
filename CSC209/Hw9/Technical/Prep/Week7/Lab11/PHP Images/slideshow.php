<?php

// Initial code with no json implemntation
// Both arrays containing file paths
$flowers = glob("Flowers/*.jpg");

// Combine jpg and png into one array
$trees = array_merge(glob("Trees/*.jpg"), glob("Trees/*.png"));

echo "flowers : " . count($flowers) . "<br>";
echo "trees : " . count($trees) . "<br>";

// Empty string to store the html for the images
$htmlContent1 = "";
$htmlContent2 = "";

// Loops through each image in the array
for ($i = 0; $i < count($flowers); $i++) {

    // Appends an html image tag using the file path to the existing htmlContent string
    $htmlContent1 .= '<img src="' . $flowers[$i] . '"><br>';
}

for ($i = 0; $i < count($trees); $i++) {

    // Appends an html image tag using the file path to the existing htmlContent string
    $htmlContent2 .= '<img src="' . $trees[$i] . '"><br>';
}

?>