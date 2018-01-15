<?php

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

    // Database fields and their values

    $firstName=$_POST['First_Name'];
    $lastName=$_POST['Last_Name'];
    $email=$_POST['Email'];
    $telephone=$_POST['Telephone'];
    $address1=$_POST['Address_1'];
    $address2=$_POST['Address_2'];
    $address3=$_POST['Address_3'];
    $address4=$_POST['Address_4'];
    $postcode=$_POST['Postcode'];
    $question=$_POST['Query'];


    // SQL statement for inserting the given information into the database table

    $sql=mysqli_query($database_connect,"INSERT INTO custinfo(First_Name,Last_Name,Email,Telephone,Address_1,Address_2,Address_3, 
    Address_4,Postcode,Query) VALUES ('$firstName','$lastName','$email','$telephone','$address1',
    '$address2','$address3','$address4','$postcode','$question')") or die(mysqli_error($database_connect));

 
    // Sends the user to a confirmation page when information is entered

    header("location:querySent.html");
 
 ?>
 
 
 
 
 
 
 