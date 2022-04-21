<?php
	require_once('auth.php');
	$page = 'member index';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Member Index</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
		<link rel="stylesheet" href="dist/styles.css">
		<link rel="stylesheet" href="dist/header.css">
</head>
<body>

	<?php include 'includes/headers/header.php';?> 
	<div class="content-container">
		<div class="content-card border-rad bg-light p-4">
			<h1>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
			<a href="member-profile.php">My Profile</a> | <a href="logout.php">Logout</a>
			<p>This is a password protected area only accessible to members. </p>

		</div>
	</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
