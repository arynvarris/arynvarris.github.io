// Contains the constructor for one point
class Point {
    constructor(x, y, label) {
        this.x = x;
        this.y = y;
        this.label = label;
    }
}

// Creates and stores multiple points inside an array
class Points {
    constructor(points) {
        this.array = [];

        // Creates the points at random locations
        for (let i = 0; i < points; i++) {
            // Keeps the points inside the canvas
            let x = RADIUS + Math.floor(Math.random() * (c.width - 2 * RADIUS));
            let y = RADIUS + Math.floor(Math.random() * (c.height - 2 * RADIUS));
            let point = new Point(x, y, "P" + i);
            
            // Pushes to array
            this.array.push(point);
        }
    }
}

// Contains the constructor for one edge
class Edge {
    constructor(pointOne, pointTwo, label) {
        this.pointOne = pointOne;
        this.pointTwo = pointTwo;
        this.label = label;
    }
}

// Creates and stores multiple edges
class Edges {
    constructor(points, numberOfEdges) {
        this.array = [];

        for (let i = 0; i < numberOfEdges; i++) {
            let point1 = points.array[i];
            let point2 = points.array[i + 1];
            let edge = new Edge(point1, point2, "E" + i);

            this.array.push(edge);
        }
    }
}