<?php session_start();
	
	//Include database connection details
	require_once('config/dbconfig.php');
	
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
    $conn = get_dbc();
	
	//Select database
	
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str, $connection) {
		return $connection->real_escape_string($str);
	}
	
	//Sanitize the POST values
	$uname = clean($_POST['uname'],$conn);
	$password = clean($_POST['password'],$conn);

	
	
	//Input Validations
	if($uname == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../login-view.php");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM users WHERE username='$uname' AND pw='".md5($_POST['password'])."'";
	$result = $conn->query($qry);

	

    if (!$result) die ("Database access failed: " . $conn->error);
	
	
	//Check whether the query was successful or not
	
	if($result->num_rows == 1) {
		
			//Login Successful
		session_regenerate_id();
		$member = $result->fetch_array(MYSQLI_ASSOC);
		$_SESSION['SESS_MEMBER_ID'] = $member['id'];
		$_SESSION['SESS_FIRST_NAME'] = $member['firstname'];
		$_SESSION['SESS_LAST_NAME'] = $member['lastname'];
		$_SESSION['SESS_USER_NAME'] = $member['username'];

		// print_r($_SESSION);
		
		session_write_close();
			
			// echo $member['username'];
		header("location: ../member_index.php");
		exit();
	}else {
		//Login failed
		header("location: ../login_failed.php");
		exit();
	}
	
?>