<?php 
	    if(!isset($_SESSION)) 
		{ 
			session_start(); 
		} 
	
$page = 'register view';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid 19 Statistics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
    <link rel="stylesheet" href="dist/styles.css">
    <link rel="stylesheet" href="dist/header.css">
</head>
<body>
    <?php include 'includes/headers/header.php';?> 
    <?php
        if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
            echo '<ul class="err">';
            foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                echo '<li>',$msg,'</li>'; 
            }
            echo '</ul>';
            unset($_SESSION['ERRMSG_ARR']);
        }
    ?>

    <div class="content-container">
        <div class="content-card border-rad bg-light p-4">
            <h2>You can register here</h2>
            <form id="registerForm" name="registerForm" method="post" action="db/register-form.php">
                <div class="form-group mb-3">
                    <label for="fname">First Name</label>
                    <input type="text"  name = "fname" class="form-control" id="fname" placeholder="First name">
                </div>
                <div class="form-group mb-3">
                    <label for="lname">Last Name</label>
                    <input type="text"  name = "lname" class="form-control" id="lname" placeholder="Last name">
                </div>
                <div class="form-group mb-3">
                    <label for="uname">User Name</label>
                    <input type="text"  name = "uname" class="form-control" id="uname" placeholder="User name">
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email address</label>
                    <input type="email"  name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>
                <div class="form-group mb-3">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" name="cpassword">
                </div>
                
                <button type="submit" class="btn btn-primary mb-3" name="Submit" value="Register">Submit</button>
            </form>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>