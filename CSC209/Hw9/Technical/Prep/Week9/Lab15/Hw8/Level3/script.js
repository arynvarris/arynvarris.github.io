// Function that tells PHP which column to sort using a passed through column name paramter
// window.location.href is a built-in JS property that changes the webpage's URL
// Used to send the clicked table header's column name to PHP so it can sort the table
function sortTable(column) {
    window.location.href = "?sort=" + column;
}
