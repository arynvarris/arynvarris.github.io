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