<?php

// PHP glob() Function
// Finds all JPG images in the Flowers folder
$flowers = glob("Flowers/*.jpg");

// PHP glob() and array_merge() Functions
// Finds both JPG and PNG images in the Trees folder
$trees = array_merge(glob("Trees/*.jpg"), glob("Trees/*.png"));

// PHP array_merge() Function
// Combines the Flowers and Trees arrays into one array
$images = array_merge($flowers, $trees);

// PHP count() Function
// Counts the total number of images in both folders
$total = count($images);

// PHP For Loop
// Loops through all images from both folders
for ($i = 0; $i < $total; $i++) {

    // PHP Echo and Print
    // Creates a slide for each image
    echo '<div class="mySlides fade">';

    // Displays the image number and total number of images
    echo '<div class="numbertext">' . ($i + 1) . ' / ' . $total . '</div>';

    // Displays the image using its file path
    echo '<img src="' . $images[$i] . '" style="width:100%">';

    // Displays the caption for each image
    echo '<div class="text">Image ' . ($i + 1) . '</div>';

    echo '</div>';
}

?>