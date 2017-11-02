<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<link href="css.css" rel="stylesheet" type="text/css">
</head>
<body>
<form action="login.php" method="post">
  
  <div class="imgcontainer">
    <img src="icon.png" alt="Avatar" class="icon">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter ID" name="username" >

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password">

    <input type="submit" name="submit">
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:none">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#" id="forgot_hyperlink">password?</a></span>
  </div>
 
</form>
</body>
</html>

