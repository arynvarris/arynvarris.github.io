<?php
// AJAX The XMLHttpRequest Object

if (isset($_GET["message"])) {
    echo "The server received your AJAX request!";
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>The XMLHttpRequest Object</h2>

<p id="demo">Click the button to request information.</p>

<button type="button" onclick="loadDoc()">Send Request</button>

<script>
function loadDoc() {
    const xhttp = new XMLHttpRequest();

    // Check that the request is finished and successful
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML =
                this.responseText;
        }
    };

    // Open and send the request
    xhttp.open("GET", "ajax_object.php?message=1");
    xhttp.send();
}
</script>

</body>
</html>