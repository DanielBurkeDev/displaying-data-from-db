<?php 
$servername = "localhost";
$username = "db-urke";
$password = "FiadhFinn";
$dbname = "coviddb";

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