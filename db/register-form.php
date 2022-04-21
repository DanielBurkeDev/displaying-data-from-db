<?php 
session_start();
require_once 'config/dbconfig.php';

//Array to store validation errors
$errmsg_arr = array();
	
//Validation error flag
$errflag = false;
   
$conn = get_dbc();

// if ($conn->connect_error) die($conn->connect_error);

		
	function clean($str, $connection) {
		return $connection->real_escape_string($str);
	}

	//Sanitize the POST values
	$fname = clean($_POST['fname'],$conn);
	$lname = clean($_POST['lname'],$conn);
	$uname = clean($_POST['uname'],$conn);
	$email = clean($_POST['email'],$conn);
	$password = clean($_POST['password'],$conn);
	$cpassword = clean($_POST['cpassword'],$conn);

	// echo $fname + ' ' + $lname + ' ' + $uname + ' ' + $email + ' ' + $password;

	//Input Validations
	if($fname == '') {
		$errmsg_arr[] = 'First name missing';
		$errflag = true;
	}
	if($lname == '') {
		$errmsg_arr[] = 'Last name missing';
		$errflag = true;
	}
	if($uname == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($email == '') {
		$errmsg_arr[] = 'Email missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	if($cpassword == '') {
		$errmsg_arr[] = 'Confirm password missing';
		$errflag = true;
	}
	if( strcmp($password, $cpassword) != 0 ) {
		$errmsg_arr[] = 'Passwords do not match';
		$errflag = true;
	}

	//Check for duplicate login ID
	if($uname != '') {
		$qry = "SELECT * FROM users WHERE username='$uname'";
		$result = $conn->query($qry);
		if (!$result) die ("Database access failed: " . $conn->error);
		//$result = mysql_query($qry);
		
		if($result->num_rows != 0) {
			$errmsg_arr[] = 'Username already in use';
			$errflag = true;
		}
		//$result->close();
		
	}

	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		// echo $errmsg_arr;
		// echo "errflag = " + $errflag;
		session_write_close();
		header("location: ../register-view.php");
		exit();
	}

	//Create INSERT query
	$qry = "INSERT INTO users(firstname, lastname, email, username, pw) VALUES('$fname','$lname', '$email', '$uname','".md5($_POST['password'])."')";
	$result = $conn->query($qry);
	if (!$result) die ("Database access failed: " . $conn->error);
	//Check whether the query was successful or not

	header("location: ../register_success.php");

	// closing connection
	$conn->close();

?>
