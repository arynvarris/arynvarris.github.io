<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
// Echo outputs text or html from php to the browser
ECHO 'Hello World!<br>';
echo 'Hello World!<br>';

// Declare and initialize a variable using $ and =
$color = "red";
echo "My car is $color<br>";
// Variables are case-sensitive in php
echo "My house is $COLOR<br><br>";


// Basic function that prints a message
function displayMessage() {
    echo "Hello world!<br><br>";
}
// Call the function
displayMessage();


// A function with a paramter sname 
function studentName($sname) {
    // Prints the name passed through the paramter, followed by "is a student at smith"
    echo "$sname is a student at smith.<br>";
}
// Calls the function and passes each paramter as $sname
studentName("Aryn");
studentName("Taylor");

echo '<br>';

// This function uses a default paramater of 50 if no height is provided
function setHeight($height = 50) {
    echo "The height is : $height <br>";
}
setHeight(350);
setHeight(); // will take the default value of 50

echo '<br><br>';

// This function uses return to find the sum of two numbers
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}
// The . in php is a concatonation operator
echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

echo '<br><br>';

// If statement that runs code only if the condition is true
$t = 14;
if ($t < 20) {
    echo "Have a good day!";
}

echo '<br><br>';

// If else statement that runs one thing if true and another if false
$t = date("H");
if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

echo '<br><br>';

// If elseif else statement checks multiple conditions in order
$t = date("H");
if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

echo '<br><br>';

// For loop repeats code while increasing a counter
// Prints the numbers from 0 to 10
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

echo '<br>';

// While loop that repeats code while the condition is true
$i = 1; // Initialize counter
while ($i < 6) { // Check condition
    echo $i; // Execute code
    $i++; // Increment counter
}

echo '<br><br>';

// For each loop that goes through every value in an array
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    echo "$value <br>";
}

echo '<br>';

// For each with keys goes through each key and value in an associative array
// Print both the key and the value from the $members array
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach ($members as $key => $value) {
    echo "$key : $value <br>";
}

echo '<br><br>';

// Create an array that stores multiple values in one variable
$cars = array("Volvo", "BMW", "Toyota");


// Set an array value by plcaing the value at index 1 with Ford
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
var_dump($cars);

echo '<br><br>';

// Array push that adds one or more values to the end of an array
$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");
var_dump($fruits);

echo '<br><br>';

// Array unshift that adds values to the beginning of an array
$fruits = array("Apple", "Banana", "Cherry");
array_unshift($fruits, "Orange", "Kiwi", "Lemon");
var_dump($fruits);

echo '<br><br>';

// Array splice that inserts Orange at index 1 without removing anything
$fruits = array("Apple", "Banana", "Cherry");
$new_fruit = "Orange";
array_splice($fruits, 1, 0, $new_fruit);
var_dump($fruits);

echo '<br><br>';

// Array pop removes the last value from an array
$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);
var_dump($cars);

echo '<br><br>';

// Array shift removes the first value from an array
$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);
var_dump($cars);

echo '<br><br>';

// Array splice eemoves 1 value starting at index 1
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);
var_dump($cars);

echo '<br><br>';

// Combines two arrays into a new array
$fruits1 = array("Apple", "Banana");
$fruits2 = array("Cherry", "Orange");
$result = array_merge($fruits1, $fruits2);
var_dump($result);

?>


</body>
</html>