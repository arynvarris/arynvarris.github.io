<?php
function initUserFolders($usersFile,$allUsersFolder){
	error_log("initUserFolders: YOU MUST IMPLEMENT THIS FUNCTION.");
}

function computeNrRegisteredUsers($usersFile){
	error_log("computeNrRegisteredUsers: YOU MUST IMPLEMENT THIS FUNCTION.");
	// STUB
	// variable to store num value
	// travers through users.json and find int value from number of users present in file
	return 8; 
}

function computeNrUserFolders($allUsersFolder){
	error_log("computeNrUserFolders: YOU MUST IMPLEMENT THIS FUNCTION.");
	//similar approach as previous function
	// to find an int number from the number of files in users, i will have to utlize ideas like base file, get int from User 1 and User 2
	// STUB
	return 2;
}

?>
