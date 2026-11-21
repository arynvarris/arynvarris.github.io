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

<h1>PHP Image Gallery Level 3</h1>

<!-- PHP Include Files -->
<!-- Includes the PHP file that finds and displays the images -->
<?php include 'slideshow.php'; ?>

<!-- HTML DOM Events -->
<!-- Calls the function when the button is clicked -->
<button onclick="displayImages()">Display Image</button>

<script>

// JavaScript Functions
// Displays only the image selected in the dropdown
function displayImages() {

    // HTML DOM Select Value Property
    // Gets the selected image ID from the dropdown
    const choice = document.getElementById("imageChoice").value;

    // JavaScript For Loop
    // Loops through every image and makes it invisible
    for (let i = 0; i < <?php echo count($images); ?>; i++) {

        // HTML DOM Changing CSS
        // Hides each image by changing its display property
        document.getElementById("image" + i).style.display = "none";
    }

    // HTML DOM Changing CSS
    // Makes only the selected image visible
    document.getElementById(choice).style.display = "block";
}

</script>

</body>
</html>