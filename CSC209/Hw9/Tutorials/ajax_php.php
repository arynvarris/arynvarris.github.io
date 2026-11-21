<?php
// AJAX PHP

if (isset($_GET["q"])) {
    $names = array("Alice", "Anna", "Bob", "Carol", "David", "Emma");

    $q = strtolower($_GET["q"]);
    $hint = "";

    foreach ($names as $name) {
        if (str_starts_with(strtolower($name), $q)) {
            if ($hint == "") {
                $hint = $name;
            } else {
                $hint .= ", " . $name;
            }
        }
    }

    if ($hint == "") {
        echo "No suggestions";
    } else {
        echo $hint;
    }

    exit();
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>AJAX PHP Example</h2>

<p>Start typing a name:</p>

<form>
    First name:
    <input type="text" onkeyup="showHint(this.value)">
</form>

<p>Suggestions: <span id="txtHint"></span></p>

<script>
// Send the typed text to PHP and display the response
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    }

    const xhttp = new XMLHttpRequest();

    xhttp.onload = function() {
        document.getElementById("txtHint").innerHTML = this.responseText;
    };

    xhttp.open("GET", "ajax_php.php?q=" + encodeURIComponent(str));
    xhttp.send();
}
</script>

</body>
</html>