<?php
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = new mysqli("localhost", "root", "rishabhd", "company");

	if ($connection->connect_error) die("Connection Error");
	// Selecting Database

	session_start();// Starting Session
	// Storing Session

	$user_check=$_SESSION['login_user'];
	// SQL Query To Fetch Complete Information Of User

	$query = "SELECT username FROM login where username='$user_check'";

	$result = $connection->query($query);
	$row = $result->fetch_assoc();
	$login_session =$row['username'];
	
	if(!isset($login_session)){
		$connection->close(); // Closing Connection
		header('Location: index.php'); // Redirecting To Home Page
	}
?>