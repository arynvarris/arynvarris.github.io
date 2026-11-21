<?php
// AJAX Introduction

if (isset($_GET["message"])) {
    echo "Hello! This message was loaded using AJAX.";
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>AJAX Introduction</h2>

<div id="demo">
    <p>This text will change when you click the button.</p>
</div>

<button type="button" onclick="loadDoc()">Change Content</button>

<script>
// Create an XMLHttpRequest object and load content without reloading.
function loadDoc() {
    const xhttp = new XMLHttpRequest();

    xhttp.onload = function() {
        document.getElementById("demo").innerHTML = this.responseText;
    };

    xhttp.open("GET", "ajax_intro.php?message=1");
    xhttp.send();
}
</script>

</body>
</html>