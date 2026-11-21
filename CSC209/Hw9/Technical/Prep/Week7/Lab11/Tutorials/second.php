
<?php

// 1. W3Schools: PHP fopen() Function
// https://www.w3schools.com/php/func_filesystem_fopen.asp
// fopen() opens a file using a specified mode.
//
// "r" = Read an existing file.
// "w" = Write to a file. Creates it if missing, overwrites if it exists.
// "a" = Append to a file. Creates it if missing, keeps existing content.

// Opens test.txt for writing.
$file = fopen("test.txt", "w");


// 2. W3Schools: PHP fwrite() Function
// https://www.w3schools.com/php/func_filesystem_fwrite.asp
// fwrite() writes a string into an open file.
// The file must first be opened with a writing mode.

fwrite($file, "Hello World!");
fwrite($file, "\nThis is a second line.");


// 3. W3Schools: PHP fclose() Function
// https://www.w3schools.com/php/func_filesystem_fclose.asp
// fclose() closes a file that was opened using fopen().

fclose($file);


// 4. W3Schools: PHP fread() Function
// https://www.w3schools.com/php/func_filesystem_fread.asp
// fread() reads a specified number of bytes from an open file.
// filesize() gets the size of the file in bytes.

$file = fopen("test.txt", "r");

echo "<h3>Reading File:</h3>";

echo nl2br(fread($file, filesize("test.txt")));

fclose($file);


// 5. W3Schools: PHP fopen() - Append Mode
// https://www.w3schools.com/php/func_filesystem_fopen.asp
// "a" opens a file and adds new content to the end.
// Unlike "w", it does not delete existing content.

$file = fopen("test.txt", "a");

fwrite($file, "\nThis line was appended.");

fclose($file);


// 6. W3Schools: PHP file_exists() Function
// https://www.w3schools.com/php/func_filesystem_file_exists.asp
// file_exists() checks whether a file or directory exists.
// Returns true if it exists and false if it does not.

echo "<h3>Checking File:</h3>";

if (file_exists("test.txt")) {
    echo "The file exists!<br>";
} else {
    echo "The file does not exist.<br>";
}


// 7. W3Schools: PHP glob() Function
// https://www.w3schools.com/php/func_filesystem_glob.asp
// glob() returns an array of filenames matching a pattern.
// "*.txt" finds all .txt files in the current directory.

echo "<h3>Finding Text Files:</h3>";

$files = glob("*.txt");

print_r($files);

?>
