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
// json_decode() Decodes a JSON string
$data = json_decode($jsonContent, true);

// Displays the content of the array as a readable format
print_r($data);

?>

<h2>Users</h2>
<table id="usersTable">
    <thead>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Logged In</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>


<script>

  // JavaScript JSON and Fetch API
  // Reads the data from users.json
async function loadUsers() {
  const response = await fetch("users.json");
  const users = await response.json();

  // HTML DOM Elements
  // Gets the table body using the DOM
  const table = document.getElementById("usersTable").getElementsByTagName("tbody")[0];

  // JavaScript For Loop
  // Loops through every user in the JSON array
  for (let i = 0; i < users.length; i++) {
    // JS String Concatenation
    // Creates one table row containing the user's information
    table.innerHTML += "<tr>" + "<td>" + users[i].username + "</td>" + "<td>" + users[i].password + "</td>" + "<td>" + users[i].loggedtimes + "</td>" + "</tr>";
  }
}

// Calls the function to load and display the users
loadUsers();

</script>


</body>
</html>