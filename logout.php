<?php
	    if(!isset($_SESSION)) 
		{ 
			session_start(); 
		} 
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
	unset($_SESSION['SESS_USER_NAME']);

	$page = 'logout';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
		<link rel="stylesheet" href="dist/styles.css">
		<link rel="stylesheet" href="dist/header.css">
<head>
<title>Logged Out</title>
</head>
<body>
	<?php include 'includes/headers/header.php';?> 
	<div class="content-container">
		<div class="content-card border-rad bg-light p-4">
			<h1>Logout </h1>
			<p align="center">&nbsp;</p>
			<h4 align="center" class="err">You have been logged out.</h4>
			<p align="center">Click here to <a href="login-view.php">Login</a></p>

		</div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
