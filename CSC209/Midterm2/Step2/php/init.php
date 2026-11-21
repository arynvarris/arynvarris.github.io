<?php
function initUserFolders($usersFile,$allUsersFolder){

	// error_log("computeNrRegisteredUsers: YOU MUST IMPLEMENT THIS FUNCTION.");

	// I assume this function is in relation to connecting the 8 users.json accounts with a corresponding user folder inside $allUsersFolder

	// file_get_contents reads a file into a string 
	// json.decode converts that string into a PHP array 
    $jsonContent = file_get_contents($usersFile);
    $data = json_decode($jsonContent, true);

	// Here you would have to check if there is a corresponding user folder for a user in users.json
	// If one does not exist, it would then create a folder
	// if (folder does not exist){
	//		create folder directory
	//	}

    // You would have to keep count of the number of user folders
    $userNum = 2;

	// You would have to then go through every user in users.json and create a corresponding home page inside that folder
	// if it exists don't create a file for the user page
	// if one does not exist, then create a file path name to create that user page
	// foreach (go through each account in users.json | as $data) {
	//		$folderPath = "name of folder path";
	//		if (file exists, skip){
	//			else create file
	//		}
	//	}

	// You will have to increment for the next user folder
	$userNum++;

	//error_log("initUserFolders: YOU MUST IMPLEMENT THIS FUNCTION.");
}

function computeNrRegisteredUsers($usersFile){

	// error_log("computeNrRegisteredUsers: YOU MUST IMPLEMENT THIS FUNCTION.");

	// In lab 15 we had to work with converting a json file into an array, and manipulating that array
	// file_get_contents reads a file into a string 
	// json.decode converts that string into a PHP array 
    $jsonContent = file_get_contents($usersFile);
    $data = json_decode($jsonContent, true);

    // To count the number of users, we need a variable to store the number of registered users
    $nrRegisteredUsers = 0;

    // A for loop to go through each user in the JSON array
    foreach ($data as $user) {
        // Increases the count by 1 per user that is counted
        $nrRegisteredUsers++;
    }

    // This will return the number of registered users
    return $nrRegisteredUsers;

	// return 8; 

}

function computeNrUserFolders($allUsersFolder){
	
	// error_log("computeNrUserFolders: YOU MUST IMPLEMENT THIS FUNCTION.");

    // The glob() function finds all the paths inside the users folder 
	// In week 8 slideshow.php where i did $flowers = glob("Flowers/*.jpg"); that makes sure the file ends with .jpg
	// This does the opposite and makes sure the folder begins with user
    $folders = glob("$allUsersFolder/user*");

    // Stores the count variable or number of user folders
    $nrUserFolders = 0;
	
	// Go through each of the folders ($folder) inside users folder($folders), and increase counter by 1 for every count 
    foreach ($folders as $folder) {
        $nrUserFolders++;
    }

	// Returns the count variable or number of user folders found
    return $nrUserFolders;

	// return 2;

}

?>
