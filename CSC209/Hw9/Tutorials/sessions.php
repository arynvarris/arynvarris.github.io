<?php
// PHP Sessions

// Start the session
session_start();

// Set session variables
// $_SESSION["username"] stores a value that persists between page requests
// isset() checks whether the session variable already exists, so refreshing doesn't reset it
if (!isset($_SESSION["username"])) {
    $_SESSION["username"] = "Alice";
    $_SESSION["favoritecolor"] = "blue";
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>PHP Sessions Tutorial</h2>

<?php
// Get PHP Session Variable Values
echo "Username is " . $_SESSION["username"] . ".<br>";
echo "Favorite color is " . $_SESSION["favoritecolor"] . ".<br>";

// Display all session variables
print_r($_SESSION);
?>

</body>
</html>