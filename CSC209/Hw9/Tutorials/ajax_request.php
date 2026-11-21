<?php
// AJAX XMLHttpRequest

if (isset($_GET["name"])) {
    echo "GET request received: " . htmlspecialchars($_GET["name"]);
    exit();
}

if (isset($_POST["name"])) {
    echo "POST request received: " . htmlspecialchars($_POST["name"]);
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>AJAX GET and POST Requests</h2>

<p id="demo">Choose a request method.</p>

<button type="button" onclick="sendGET()">GET Request</button>
<button type="button" onclick="sendPOST()">POST Request</button>

<script>
// GET Requests
function sendGET() {
    const xhttp = new XMLHttpRequest();

    xhttp.onload = function() {
        document.getElementById("demo").innerHTML = this.responseText;
    };

    xhttp.open("GET", "ajax_request.php?name=Alice");
    xhttp.send();
}

// POST Requests
function sendPOST() {
    const xhttp = new XMLHttpRequest();

    xhttp.onload = function() {
        document.getElementById("demo").innerHTML = this.responseText;
    };

    xhttp.open("POST", "ajax_request.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("name=Bob");
}
</script>

</body>
</html>