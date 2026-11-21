<?php

// Initial code with no json implemntation 
// Both arrays containing file paths
$flowers = glob("Flowers/*.jpg");
// Combine jpg and png into one array
$trees = array_merge(glob("Trees/*.jpg"), glob("Trees/*.png"));

echo "flowers : " . count($flowers) . "<br>";
echo "trees : " . count($trees) . "<br>";

// PHP array_merge() Function
// Combines both folders into one array for selecting individual images
$images = array_merge($flowers, $trees);

// HTML Select Tag and PHP For Loop
// Creates a dropdown option for every image found by PHP
echo '<select id="imageChoice">';

for ($i = 0; $i < count($images); $i++) {
    echo '<option value="image' . $i . '">Image ' . ($i + 1) . '</option>';
}

echo '</select>';

// PHP For Loop and PHP Echo
// Creates each image with a unique ID and hides it initially
for ($i = 0; $i < count($images); $i++) {
    echo '<img id="image' . $i . '" src="' . $images[$i] . '" style="display:none;">';
}

?>