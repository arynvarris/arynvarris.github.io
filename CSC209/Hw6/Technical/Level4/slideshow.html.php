<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Images - Level 4</title>

    <style>
        /* How to slideshow CSS */
        /* Sets the box sizing for the slideshow. */
        * {
            box-sizing: border-box;
        }

        /* Creates the main slideshow container */
        .slideshow-container {
            max-width: 800px;
            position: relative;
            margin: auto;
        }

        /* Hides all slides by default */
        .mySlides {
            display: none;
        }

        /* Styles the images inside the slides */
        .mySlides img {
            width: 100%;
        }

        /* Styles the previous and next arrows */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Positions the next arrow on the right. */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* Changes the arrow background when hovered over */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Styles the caption text */
        .text {
            color: white;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
            background-color: rgba(0,0,0,0.5);
        }

        /* Styles the slide numbers */
        .numbertext {
            color: white;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* Styles the navigation dots */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        /* Highlights the active dot */
        .active, .dot:hover {
            background-color: #717171;
        }

        /* Adds the fading animation between slides */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }
    </style>
</head>

<body>

<h1>PHP Image Slideshow</h1>

<!-- How to slideshow HTML -->
<!-- Creates the main container for the slideshow -->
<div class="slideshow-container">

    <!-- PHP Include Files -->
    <!-- Includes the PHP file that generates the slides -->
    <?php include 'slideshow.php'; ?>

    <!-- How to slideshow -->
    <!-- Arrows call the JavaScript function to change slides -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>

<br>

<!-- Creates the navigation dots below the slideshow -->
<div style="text-align:center">

    <?php
    // PHP For Loop and PHP Echo
    // Creates one navigation dot for every image.
    for ($i = 0; $i < count($images); $i++) {

        echo '<span class="dot" onclick="currentSlide(' . ($i + 1) . ')"></span>';
    }
    ?>

</div>

<script>

// Keeps track of the current slide
let slideIndex = 1;

// Displays the first slide when the page loads
showSlides(slideIndex);

// Function to move to the next or previous slide
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Function to display a slide when a dot is clicked
function currentSlide(n) {
    showSlides(slideIndex = n);
}

// Function that controls which slide is visible
function showSlides(n) {

    let i;

    // Uses the DOM to locate the slides and navigation dots
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");

    // Stops if the folder contains no images
    if (slides.length == 0) {
        return;
    }

    // Returns to the first slide after the last slide
    if (n > slides.length) {
        slideIndex = 1;
    }

    // Goes to the last slide when moving back from the first
    if (n < 1) {
        slideIndex = slides.length;
    }

    // Hides every slide
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    // Removes the active class from each navigation dot
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    // Displays the selected slide
    slides[slideIndex - 1].style.display = "block";

    // Highlights the selected slide's navigation dot
    dots[slideIndex - 1].className += " active";
}

</script>

</body>
</html>