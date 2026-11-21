<!DOCTYPE html>
<html>
<head>
  <title>JSON PHP</title>
  <!-- Links to an external CSS file -->
  <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>JavaScript JSON</h1>
<!-- Includes code from an external PHP file for the sorting php functionsc-->
<?php include '../external.php'; ?>

<!-- Calls the sorting function when a table header is clicked using html events onclick Attribute -->
<h4> Click on the table header to sort the data in ascending order, either alphabetically or numerically: </h4>
<table id="usersTable">
    <thead>
        <tr>
            <!-- HTML onclick event-->
            <!-- Clicking on a header calls the sortTable function from script.js-->
            <!-- Column name is passed through that function when clicked -->
            <th onclick="sortTable('username')">Username</th>
            <th onclick="sortTable('loggedtimes')">Times Logged In</th>
            <th onclick="sortTable('loggedminutes')">Minutes Logged In</th>
        </tr>
    </thead>

    <tbody>

    <?php
    // Creates the rows for each user by looping through the sorted array and creating a table row for each user
    // Use the $i to keep all the values corresponding together
    foreach ($sortValues as $i => $value) {
      // Creates a new row and fills three cells with the user's info
      // htmlspecialchars() converts special characters so the password displays safely as text
      echo "<tr>";
      echo "<td>" . htmlspecialchars($data[$i]["username"]) . "</td>";
      echo "<td>" . htmlspecialchars($data[$i]["loggedtimes"]) . "</td>";
      echo "<td>" . htmlspecialchars($data[$i]["loggedminutes"]) . "</td>";
      echo "</tr>";
    }
    ?>

  </tbody>
</table>

<!-- Connects to an external JavaScript file -->
<script src="../script.js"></script>

</body>

</html>