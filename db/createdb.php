<?php
// require_once 'config/dbconfig.php';
$servername = "localhost";
$username = "db-urke";
$password = "FiadhFinn";
$dbname = "";


// Creating a connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Creating a database named newDB
$sql = "CREATE DATABASE coviddb";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully with the name coviddb";
    $dbname = "coviddb";
} else {
    echo "Error creating database: " . $conn->error;
}
// closing connection
$conn->close();


$conn = new mysqli($servername, $username, $password, $dbname);
// Creating a table named country_notification
$sql = "CREATE TABLE country_notification(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    country VARCHAR(30),
    country_code VARCHAR(30),   
    continent VARCHAR(30),
    population VARCHAR(30),
    indicator VARCHAR(30),
    weekly_count VARCHAR(30),
    year_week VARCHAR(30),
    rate_14_day VARCHar(30),
    cumulative_count VARCHAR(30),
    source VARCHAR(100)
)";
if ($conn->query($sql) === TRUE) {
    echo "<br>Table created successfully with the name country_notification";
} else {
    echo "Error creating Table: " . $conn->error;
}
// closing connection
$conn->close();
?>