<?php 
require_once 'config/dbconfig.php';

$conn = get_dbc();

// shows table based on what is selected in Country dropdown

    $yw = $_GET['yw'];
   
    // echo "$yw"; 
    // Query a db table named country_notification
    $sql = "SELECT * FROM country_notification WHERE year_week = '".$yw."'";

$result = $conn->query($sql);
if ($result != null) {
    // echo "Database queried";

    echo "<table class='table table-striped'>
    <thead class='table-dark'>
    <tr>
    <th scope='col'>country</th>
    <th scope='col'>country_code</th>
    <th scope='col'>continent</th>
    <th scope='col'>population</th>
    <th scope='col'>indicator</th>
    <th scope='col'>weekly_count</th>
    <th scope='col'>year_week</th>
    <th scope='col'>rate_14_day</th>
    <th scope='col'>cumulative_count</th>
    <th scope='col'>source</th>
    </tr>
    </thead>";
    echo "<tbody>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['country'] . "</td>";
        echo "<td>" . $row['country_code'] . "</td>";
        echo "<td>" . $row['continent'] . "</td>";
        echo "<td>" . $row['population'] . "</td>";
        echo "<td>" . $row['indicator'] . "</td>";
        echo "<td>" . $row['weekly_count'] . "</td>";
        echo "<td>" . $row['year_week'] . "</td>";
        echo "<td>" . $row['rate_14_day'] . "</td>";
        echo "<td>" . $row['cumulative_count'] . "</td>";
        echo "<td>" . $row['source'] . "</td>";
        echo "</tr>";      
    }
    echo "</tbody>";
    echo "</table>";

} else {
    echo "Error querying database: " . $conn->error;
}
// closing connection
$conn->close();




?>