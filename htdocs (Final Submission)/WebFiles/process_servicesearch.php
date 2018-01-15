<?php

function searchServices($sql){
	
	// Connect to the database
	
	$database_host="localhost"; 
    $database_username="root";
    $database_password="";
    $database_name="npc";
	
    $database_connect = mysqli_connect($database_host, $database_username, $database_password, $database_name) or die(); 
	

	// Display an error message if the database connection fails

    if(mysqli_connect_error())
    {
	echo "Database connection has failed";
    }	
	
    $searchedService = mysqli_query($database_connect, $sql);
    return $searchedService;
}

   // Executes an SQL statement that searches the database for values LIKE the drop down list value

    if(isset($_POST['searchDatabase']))
    {
    $dropDownSearch = $_POST['dropDownList'];
    $sql = "SELECT * FROM `services` WHERE (`Service`) LIKE '%".$dropDownSearch."%'";
    $returnedService = searchServices($sql);
    }

    
	// Displays the entire contents of the table on the page by default
	
    else{
    $sql = "SELECT * FROM `services`";
    $returnedService = searchServices($sql);
    }

?>





