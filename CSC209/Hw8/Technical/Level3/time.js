// JS Date getTime() Method gets the current time when the user page first loads aka the starting time for future calculations
let loginTime = new Date().getTime();

// Function that calculates how many minutes the user was logged in for
function timeLoggedIn() {

    // Gets the current time when the Logout button is clicked
    let logoutTime = new Date().getTime();

    // Subtracts the starting time from the logout time
    // Divides by 60000 to convert milliseconds into minutes
    let minutes = (logoutTime - loginTime) / 60000;

    // Math.floor() Method rounds down to a whole number of completed minutes
    minutes = Math.floor(minutes);

    // HTML DOM adds the calculated minutes to the hidden form input
    document.getElementById("minutes").value = minutes;

    // Returns the number of minutes that have passed
    return minutes;
}