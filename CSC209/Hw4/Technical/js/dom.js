// Displays the coordinates and edge connections
function displayCoordinates(points, edges) {
    let text = "<h3>Point Coordinates</h3>";

    // Loops through each point
    for (let i = 0; i < points.array.length; i++) {
        // Displays the coordinates
        text += points.array[i].label + ": (" + points.array[i].x + ", " + points.array[i].y + ")<br>";
    }
    text += "<h3>Edge Pairs</h3>";

    // Loops through the edges
    for (let i = 0; i < edges.array.length; i++) {
        // Displays the points connected by each edge
        text += edges.array[i].label + ": " + edges.array[i].pointOne.label + " - " + edges.array[i].pointTwo.label + "<br>";
    }

    // Displays the information in the HTML
    document.getElementById("coordinates").innerHTML = text;
}


// Displays the number of points and edges
function displayInfo(points, edges) {
    document.getElementById("info").innerHTML = "Number of Points: " + points.array.length + "<br>Number of Edges: " + edges.array.length;
}