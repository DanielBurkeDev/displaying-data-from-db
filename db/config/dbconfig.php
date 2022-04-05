<?php 
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

// Creating a connection


// echo "Arrived in config";


function get_dbc() {
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }   
    return $conn;
}

?>
