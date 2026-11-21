<?php

// Initial code with no json implemntation 
// Both arrays containing file paths
$flowers = glob("Flowers/*.jpg");
// Combine jpg and png into one array
$trees = array_merge(glob("Trees/*.jpg"), glob("Trees/*.png"));

echo "flowers : " . count($flowers) . "<br>";
echo "trees : " . count($trees) . "<br>";

// Puts the JPG files that were combined from the glob into an array
//$images = array_merge($jpg);

// json implementation
// PHP file_get_contents()
// Reads the JSON file and stores its contents as a string.
//$json = file_get_contents("gallery.json");

// PHP and JSON
// Converts the JSON string into a PHP associative array
// true tells PHP to convert the JSON into an associative array instead of an object
//$images = json_decode($json, true);

//var_dump($images);

// Gets the Flowers and Trees arrays from the decoded JSON
//$flowers = $images["Flowers"];
//$trees = $images["Trees"];

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