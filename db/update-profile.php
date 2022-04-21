<?php
require_once 'config/dbconfig.php';

$conn = get_dbc();

//Console log function
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}
// END Console log Function

function clean($str, $connection) {
    return $connection->real_escape_string($str);
}

$id = $_SESSION['SESS_MEMBER_ID'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    	//Sanitize the POST values
    $fname = clean($_POST['fname'],$conn);
    $lname = clean($_POST['lname'],$conn);
    $uname = clean($_POST['uname'],$conn);
    $email = clean($_POST['email'],$conn);
    $password = clean($_POST['password'],$conn);
    $cpassword = clean($_POST['cpassword'],$conn);

    console_log($fname. $lname . $name . $email . $password);
}

$qry = "UPDATE users SET firstname = '$fname', lastname = '$lname', username = '$uname', email = '$email', pw = md5('$password') WHERE id = '$id'";

$result = $conn->query($qry);
if (!$result) die ("Database access failed: " . $conn->error);
//Check whether the query was successful or not



// closing connection
$conn->close();

$message = "Your details have been updated";
echo "<script type='text/javascript'>alert('$message');</script>";




?>

