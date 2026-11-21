<!DOCTYPE html>
<html>
<head>
<title>JSON PHP</title>
</head>
<body>

<h1>JavaScript JSON</h1>
<h2>The response.json() Method</h2>
<p>The response.json() method parses the JSON text and returns a JavaScript value.</p>

<p id="demo"></p>

<!-- Javascript that prints out induvisual elements from the users.json data -->
<script>

async function loadProducts() {
  const response = await fetch("users.json");
  const products = await response.json();

  myDisplayer(products[0].username);
  myDisplayer(products[0].password);
}

loadProducts();

// Function to display any text
function myDisplayer(text) {
  document.getElementById("demo").innerHTML += text + "<br>";
}

</script>

<?php
// Gets the file path from users.json
$jsonFile = 'users.json';
// file_get_contents()	Reads a file into a string
$jsonContent = file_get_contents($jsonFile);

// Converts JSON into a PHP array 
$data = json_decode($jsonContent, true);

// Displays the content of the array as a readable format
print_r($data);

?>

</body>
</html>