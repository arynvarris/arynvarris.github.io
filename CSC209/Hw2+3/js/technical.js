/* JavaScript for showing the ticket text if toggled, and changing Read Me into Hide */
function showReadMe() {
  var ticket = document.getElementById("ticket");
  var button = document.getElementById("readButton");

  if (ticket.style.display == "none") {
    ticket.style.display = "block";
    button.innerHTML = "Hide";
  } else {
    ticket.style.display = "none";
    button.innerHTML = "Read Me";
  }
}

/* Javascript that changes between the daytime and nightime CSS styling */
function changeStyle() {
  var style = document.getElementById("stylesheet");
  var image = document.getElementById("styleImage");

  /* If light mode is on, change to dark mode */
  if (style.getAttribute("href") == "css/style1.css") {
    style.setAttribute("href", "css/style2.css");
    image.src = "images/moon.png";
    image.alt = "Dark Mode";
    /*Else, change to light mode */
  } else {
    style.setAttribute("href", "css/style1.css");
    image.src = "images/sun.png";
    image.alt = "Light Mode";
  }
}

/* JavaScript that uses if else statment to determiine when to show and hide the resources */
function showResources() {
  var credits = document.getElementById("resources");
  var button = document.getElementById("resourceButton");

  if (credits.style.display == "none") {
    credits.style.display = "block";
    button.innerHTML = "Hide Image Resources";
  } else {
    credits.style.display = "none";
    button.innerHTML = "Show Image Resources";
  }
}

/* JavaScript that displays the day and date using the get method */
function showDate() {
  var today = new Date();
  var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
  var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

  var day = days[today.getDay()];
  var month = months[today.getMonth()];
  var date = today.getDate();
  var year = today.getFullYear();

  document.getElementById("todaysDate").innerHTML = day + ", " + month + " " + date + ", " + year;
}

/* JavaScript that uses an if else statement to determine when to show and hide the movie table */
function showTable() {
  var table = document.getElementById("movieTable");
  var button = document.getElementById("tableButton");

  if (table.style.display == "none") {
    table.style.display = "table";
    button.innerHTML = "Hide Movie Schedule";
  } else {
    table.style.display = "none";
    button.innerHTML = "Show Movie Schedule";
  }
}

/* Uses an if else statement to move the navigation menu from the left to the right side of the page */
function changeMenuLocation() {
  var container = document.getElementById("pageContainer");
  var button = document.getElementById("menuButton");

  if (container.style.flexDirection == "row-reverse") {
    container.style.flexDirection = "row";
    button.innerHTML = "Move Menu Right";
  } else {
    container.style.flexDirection = "row-reverse";
    button.innerHTML = "Move Menu Left";
  }
}

/* Shows/hides the matching movie image */
function showHideImage(imageId, button) {
  var image = document.getElementById(imageId);

  if (image.style.display == "none") {
    image.style.display = "inline";
    button.innerHTML = "Hide";
  } else {
    image.style.display = "none";
    button.innerHTML = "Show";
  }
}