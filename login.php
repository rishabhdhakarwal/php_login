<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
        echo "Bhosdiwale dono argument tera baap dega";
    }
    else {

        // Define $username and $password

        $username = $_POST["username"];
        $password = $_POST["password"];

        // Establishing Connection with Server by passing server_name, user_id and password as a parameter

        $connection = new mysqli("localhost", "root", "rishabhd", "company");
        if ($connection->connect_error) die("Connection Error");

        mysqli_real_escape_string($username);
        mysqli_real_escape_string($password);

        // Selecting Database

        $query = "SELECT * FROM `login` where username='$username' AND password='$password'";
        $result = $connection->query($query);
        if ($result->num_rows === 1) {
            $_SESSION['login_user'] = $username; // Initializing Session
            echo "USER VALIDATED";
            header("location: profile.php"); // Redirecting To Other Page
        }
        else {
            $error = "Username or Password is invalid";
            echo $error;
        }

        $connection->close(); // Closing Connection
    }
}
else {
    // echo "Submit to kar madharchod form";
}

?>