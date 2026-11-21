
<?php
$week = 10;
$section = "";

if (isset($_GET["week"])) {
    $week = $_GET["week"];
}

if (isset($_GET["section"])) {
    $section = $_GET["section"];
}
?>

<!DOCTYPE html>
<html>

<head>
<title>Class Navigation Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
* {
  box-sizing: border-box;
}

/*Makes a vertical flex container that is the full height of the browser window, which allows you to push the footer down*/
body {
  margin: 0;
  padding: 0;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  font-family: "Arial Black", Arial, sans-serif;
  text-transform: uppercase;
  background-color: #fff4df;
}

header {
  background-color: #d65a2e;
  color: #333333;
  padding: 20px;
  text-align: center;
}

/* Style the topnav */
ul.topnav {
  display: flex;
  list-style-type: none;
  margin: 0;
  padding: 0;
  background-color: #333333;
}

/* Style links in topnav */
ul.topnav li a {
  display: block;
  color: #f07845;
  padding: 22px 20px;
  text-decoration: none;
}

/* Change color on hover */
ul.topnav li a:hover {
  background-color: #d65a2e;
  color: #333333;
}

/*Adding the one pushes the footer down to the bottom of the page*/
div.flex-container {
  display: flex;
  flex-direction: row;
  flex: 1;
}

/*Splits container in half 50/50*/
div.flex-container > div {
  width: 50%;
  padding: 20px;
  margin-top: 0%;
}

div.flex-container > div:first-child {
  width: 15%;
  background-color: #d65a2e;
  padding: 0;
}

div.flex-container > div:last-child {
  width: 85%;
  background-color: #fff4df;
}

.sidenav {
  width: 100%;
  background-color: #d65a2e;
}

.sidenav a {
  display: block;
  padding: 15px;
  text-decoration: none;
  font-size: 16px;
  color: #333333;
}

.sidenav a:hover {
  background-color: #333333;
  color: #f07845;
}

/* Style the footer */
footer {
  background-color: #333333;
  color: #f07845;
  padding: 15px;
  text-align: center;
}

/* Use media query and show the flex items vertically if screen width is less than 600px */
@media screen and (max-width:600px) {
  div.flex-container {
    flex-direction: column;
  }

  div.flex-container > div:first-child,
  div.flex-container > div:last-child {
    width: 100%;
  }
}
</style>
</head>

<!--End of styling CSS, start of body or page -->

<body>

<header>
  <h1> PHP Midterm 2 </h1>
</header>

<ul class="topnav">
  <!-- Horizontal Navbar Using Float -->
  <li><a href="?week=7">Week 7</a></li>
  <li><a href="?week=8">Week 8</a></li>
  <li><a href="?week=9">Week 9</a></li>
  <li><a href="?week=10">Week 10</a></li>
</ul>

<div class="flex-container">

  <div>
    <div id="mySidenav" class="sidenav">

      <?php if ($week == 7) { ?>
      <a href="?week=7&section=lab11">Lab 11+12</a>
      <?php } ?>

      <?php if ($week == 8) { ?>
        <a href="?week=8&section=lab13">Lab 13+14</a>
      <?php } ?>

      <?php if ($week == 9) { ?>
        <a href="?week=9&section=lab15">Lab 15+16</a>
      <?php } ?>

      <?php if ($week == 10) { ?>
        <a href="?week=10&section=lab1">Lecture+Lab 17</a>
        <a href="?week=10&section=tutorials">Tutorials</a>
        <a href="?week=10&section=hw9">Homework 9</a>
      <?php } ?>

    </div>
  </div>

  <div>
    <?php if ($week == 7 && $section == "lab11") { ?>

    <h2>Lab 11+12: Slideshows and PHP</h2>
    <p>Slideshow examples and PHP intro tutorials.</p>

    <p><a href="Week7/Lab11/Tutorials/first.php">PHP Intro Tutorials</a></p>
    <p><a href="Week7/Lab11/Tutorials/second.php">PHP Intro Tutorials Part 2</a></p>
    <p><a href="Week7/Lab11/PHP Images/level2.php">Slideshow Exercise 1</a></p>
    <p><a href="Week7/Lab11/PHP Images/slideshow.html.php">Slideshow Exercise 2</a></p>

    <?php } ?>


    <?php if ($week == 8 && $section == "lab13") { ?>

    <h2>Lab 13+14: Slideshows and PHP</h2>
    <p>Slideshow file processing on the server.</p>

    <p><a href="Week8/Lab13/Technical/Level5/slideshow.html.php">Homework 6</a></p>
    <p><a href="Week8/Lab13/whereami.php">Handling Files with PHP </a></p>
    <p><a href="Week8/Lab13/whereami2.php">Handling Files with PHP part 2 </a></p>

    <?php } ?>

    <?php if ($week == 9 && $section == "lab15") { ?>

    <h2>Lab 15+16: PHP</h2>
    <p>Slideshow file processing on the server.</p>

    <p><a href="Week9/Lab15/week8.html.php"> Array </a></p>
    <p><a href="Week9/Lab15/admin.html.php"> Table </a></p>
    <p><a href="Week9/Lab15/Hw8/Level1/admin.html.php"> Sorting Table </a></p>
    <p><a href="Week9/Lab15/Hw8/Level3/login.html.php"> Sorting Table part 2</a></p>
    <p><a href="Week9/Lab15/Part2/login.html.php"> Login </a></p>

    <?php } ?>


    <?php if ($section == "") { ?>
      <h2>Week <?php echo $week; ?></h2>
      <p>Select an assignment from the left navigation bar.</p>
    <?php } ?>

    <?php if ($week == 7 || $week == 8 || $week == 9) { ?>

      <?php if ($section == "lab") { ?>
        <h2>Week <?php echo $week; ?> Lab</h2>
        <p>Exercises and practice from this week's lab.</p>
        <a href="Week<?php echo $week; ?>/Lab/index.html.php">Open Lab</a>
      <?php } ?>

      <?php if ($section == "homework") { ?>
        <h2>Week <?php echo $week; ?> Homework</h2>
        <p>Instructions and completed work for this week's homework.</p>
        <a href="Week<?php echo $week; ?>/Homework/index.html.php">Open Homework</a>
      <?php } ?>

    <?php } ?>

    <?php if ($week == 10) { ?>

      <?php if ($section == "lab1") { ?>
        <h2>Lab 1: Forms and PHP</h2>
        <p>Practice creating forms and submitting information to PHP.</p>
        <a href="Week10/Lab1/index.html.php">Open Lab 1</a>
      <?php } ?>

      <?php if ($section == "lab2") { ?>
        <h2>Lab 2: PHP and AJAX</h2>
        <p>Practice updating information using PHP and AJAX.</p>
        <a href="Week10/Lab2/index.html.php">Open Lab 2</a>
      <?php } ?>

      <?php if ($section == "hw9") { ?>
        <h2>Homework 9: Login Application</h2>
        <p>Create a login page and an administrator page.</p>
        <a href="Week10/Hw9/index.html.php">Open Homework 9</a>
      <?php } ?>

      <?php if ($section == "tutorials") { ?>
        <h2>Tutorials</h2>
        <p>Review the PHP, AJAX, and session tutorials.</p>
        <a href="Week10/Tutorials/index.html.php">Open Tutorials</a>
      <?php } ?>

    <?php } ?>

  </div>

</div>

<footer>
  <p> CSC 209 Fall 2026 <br> Aryn Villar Harris</p>
</footer>

</body>

</html>
