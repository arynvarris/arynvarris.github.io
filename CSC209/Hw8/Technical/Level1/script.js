// JS that prints out induvisual elements from the users.json data
async function loadProducts() {
    const response = await fetch("users.json");
    const products = await response.json();

    myDisplayer(products[0].username);
    myDisplayer(products[0].password);
}

// Calls the function
loadProducts();

// Function to display any text to html dom id demo
function myDisplayer(text) {
    document.getElementById("demo").innerHTML += text + "<br>";
}


// Function that tells PHP which column to sort using a passed through column name paramter
// window.location.href is a built-in JS property that changes the webpage's URL
// Used to send the clicked table header's column name to PHP so it can sort the table
function sortTable(column) {
    window.location.href = "?sort=" + column;
}

