// Assigns all points random locations
function randomizePoints(points) {
    for (let i = 0; i < points.array.length; i++) {
        // Keeps the point inside the canvas
        points.array[i].x = RADIUS + Math.floor(Math.random() * (c.width - 2 * RADIUS));
        points.array[i].y = RADIUS + Math.floor(Math.random() * (c.height - 2 * RADIUS));
    }
}

// Randomizes the point locations and redraws the canvas
function randomizeGraph(points, edges) {
    randomizePoints(points);
    redrawCanvas(points, edges);
}

function exportImage() {
    let link = document.getElementById("a");

    link.href = "Images/canvas.png";
    link.download = "canvas.png";

    link.click();
}


function accordian(id) {
    document.getElementById(id).classList.toggle("w3-show");
}

function circleFormation(points, edges) {

    // X,Y point for the center of the canvas
    let centerX = c.width / 2;
    let centerY = c.height / 2;

    // Radius of the circle formation
    let radius = 150;

    // Gets the points from the array
    let numPoints = points.array.length;

    // Loops through each point and uses the redraw canvas function from graphics.js to display the new formation 
    for (let i = 0; i < numPoints; i++) {

        // Calculates the angle for each value i in the array
        let angle = (2 * Math.PI * i) / numPoints;

        // Sets the new X,Y coordinates for each value i
        points.array[i].x = centerX + radius * Math.cos(angle);
        points.array[i].y = centerY + radius * Math.sin(angle);
    }

    // Redraws the canvas with new circle formation
    redrawCanvas(points, edges);
}


function addPoint(event) {

    // Gets the coordinates from the mouse position
    let x = event.offsetX;
    let y = event.offsetY;

    // Creates a new point
    let point = new Point(x, y, "P" + points.array.length);

    // Adds the point to the array
    points.array.push(point);

    // Redraws the canvas
    redrawCanvas(points, edges);
}


// Places the points in a circle formation when the canvas is double-clicked
function onClick() {
    circleFormation(points, edges);
}