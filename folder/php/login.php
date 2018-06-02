<?php
include "db.php";
session_start();

//test if user already login 
if($_SESSION['logged_in'] != true){
    $_SESSION['logged_in'] = false;
}
else{
    header('Location: ../index.php');
		
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta charset="UTF-8" />
	<link href="../css/login.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="icon" type="image/jpg" href="../img/ricardo-gomez-angel-586701-unsplash.jpg">
	<title>BURA Login</title>
</head>

<body>
	<div class="loginContainer">
		<h5>BURA Login</h5> 
		<form action = "login_back.php" method="POST" >  
			<div class="div_username"> 
				<span class='entypo-user'></span>
				<input name="uname" type="text" placeholder ="Username" maxlength="" autofocus required />
			</div>
			<div class="div_password"> 
				<span class='entypo-lock'></span>		
				<input name="pass" type="password" placeholder="Password" required /> 
			</div> 				
			<div class="div_submit">
				<input name="signin" type="submit" value="Sign In"/>
			</div>
		</form>
	</div>	
</body>
</html>
