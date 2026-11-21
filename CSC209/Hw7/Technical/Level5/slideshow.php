<?php

// PHP glob() and array_merge() Functions
// Finds all JPG and PNG images in both folders and combines them into one array
$images = array_merge(glob("Flowers/*.jpg"), glob("Trees/*.jpg"), glob("Trees/*.png"));

// PHP count() Function
// Counts the total number of images
$total = count($images);

// PHP If...Else
// Checks if there are images to display
if ($total > 0) {

    // PHP Variables
    // Starts the slideshow at the first image
    $slide = 1;

    // PHP $_GET and isset() Function
    // Gets the selected slide number from the URL
    if (isset($_GET["slide"])) {
        $slide = (int) $_GET["slide"];
    }

    // PHP If...Else
    // Returns to the first image after the last
    if ($slide > $total) {
        $slide = 1;
    }

    // Returns to the last image before the first
    if ($slide < 1) {
        $slide = $total;
    }

    // PHP Arrays
    // Gets the selected image from the array
    $image = $images[$slide - 1];

    // PHP pathinfo() Function
    // Creates a caption using the filename without its extension
    $caption = "This is " . pathinfo($image, PATHINFO_FILENAME);

    // PHP Echo and Print
    // Creates the slide and displays its image
    echo '<div class="mySlides">';

    // Displays the current image number
    echo '<div class="numbertext">' . $slide . ' / ' . $total . '</div>';

    // Displays the selected image
    echo '<img src="' . htmlspecialchars($image) . '" style="width:100%">';

    // PHP htmlspecialchars() Function
    // Displays the filename as a caption
    echo '<div class="text">' . htmlspecialchars($caption) . '</div>';

    echo '</div>';

    // PHP $_GET and HTML Links
    // Creates Previous and Next links to change slides.
    echo '<a class="prev" href="?slide=' . ($slide - 1) . '">&#10094;</a>';
    echo '<a class="next" href="?slide=' . ($slide + 1) . '">&#10095;</a>';

    //  Echo and Print CSS Text Alignment
    // Creates a container to center the navigation dots
    echo '<div class="dots-container">';

    // PHP For Loop
    // Creates a navigation dot for each image
    for ($i = 1; $i <= $total; $i++) {

        // PHP If...Else
        // Highlights the dot for the selected slide.
        if ($i == $slide) {
            echo '<a class="dot active" href="?slide=' . $i . '"></a>';
        } else {
            echo '<a class="dot" href="?slide=' . $i . '"></a>';
        }
    }

    echo '</div>';

} else {

    // PHP Echo and Print
    // Displays a message if there are no images are found
    echo "No images found.";
}

?>