// Draws one point on the canvas
function drawPoint(point) {
    ctx.beginPath();
    ctx.arc(point.x, point.y, RADIUS, 0, 2 * Math.PI);
    ctx.stroke();

    // Labels the point
    ctx.fillText(point.label, point.x + 5, point.y - 5);
}

// Draws all points on the canvas
function drawPoints(points) {
    for (let i = 0; i < points.array.length; i++) {
        drawPoint(points.array[i]);
    }
}

// Draws one edge on the canvas
function drawEdge(edge) {
    ctx.beginPath();
    ctx.moveTo(edge.pointOne.x, edge.pointOne.y);
    ctx.lineTo(edge.pointTwo.x, edge.pointTwo.y);
    ctx.stroke();

    // Locates middle of edge
    let middleX = (edge.pointOne.x + edge.pointTwo.x) / 2;
    let middleY = (edge.pointOne.y + edge.pointTwo.y) / 2;

    // Labels edge
    ctx.fillText(edge.label, middleX, middleY);
}

// Draws all edges on the canvas
function drawEdges(edges) {
    for (let i = 0; i < edges.array.length; i++) {
        drawEdge(edges.array[i]);
    }
}

// Clears the whole canvas
function clearCanvas() {
    ctx.clearRect(0, 0, c.width, c.height);
}

// Clears and redraws the canvas
function redrawCanvas(points, edges) {
    clearCanvas();
    drawEdges(edges);
    drawPoints(points);
}