<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "petmovetko";

	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 

	$firstName = $_GET["firstName"];
	$lastName = $_GET["lastName"];
	$email = $_GET["email"];
	$pass = $_GET["pass"];
	$address = $_GET["address"];

	$sql = "INSERT INTO Customers (lastName, firstName, email, password, address) VALUES ('$lastName', '$firstName', '$email', '$pass', '$address')";
    
    if ($conn->query($sql) == TRUE) {
    	echo "Created New Account!";
    } else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>