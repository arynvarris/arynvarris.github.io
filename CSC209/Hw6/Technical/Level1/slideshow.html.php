
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Images</title>

    <style>
        /* Styling */
        img {
            width: 150px;
            height: auto;
            margin: 5px;
        }
    </style>

</head>

<body>

<?php include 'slideshow.php';?>

<script>

// JS Functions
// Function that display images based on the selected folder
function displayImages() {

    // HTML DOM Elements and Select Value
    // Uses the DOM to get the selected value from the dropdown
    const choice = document.getElementById("imageChoice").value;

    // Uses the DOM to locate both divs by their IDs.
    const imageList1 = document.getElementById("imageList1");
    const imageList2 = document.getElementById("imageList2");

    // JS If...Else
    // Displays images from the first array 
    if (choice == "folder1") {

        // PHP JSON
        // Converts the PHP string to a JavaScript string and inserts the images
        imageList1.innerHTML = <?php echo json_encode($htmlContent1); ?>;

        // Clears the second div.
        imageList2.innerHTML = "";
    } else { // Displays images from the second array 

        imageList2.innerHTML = <?php echo json_encode($htmlContent2); ?>;

        // Clears the first div
        imageList1.innerHTML = "";
    }

}

// Uses the dom to locate and get access to the html paragraph with id imageList 
//const paragraph = document.getElementById("imageList");

// PHP converts the htmlContent into a js string using json_encode(), then innerHTML inserts the image tags into the paragraph
//paragraph.innerHTML = 

</script>

<!-- HTML Select tag -->
<select id="imageChoice">
    <option value="folder1">Folder 1</option>
    <option value="folder2">Folder 2</option>
</select>

<!-- DOM Events -->
<!-- Calls the showImages() function when the button is clicked -->
<button onclick="displayImages()">Display Images</button>

<!-- DOM getElementById() -->
<!-- Two divs with different IDs for the DOM to insert images -->
<div id="imageList1"></div>
<div id="imageList2"></div>

</body>
</html>