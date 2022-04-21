<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

// print_r($_SESSION);

	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
		

		header("location: access_denied.php");
		exit();
	}
?>