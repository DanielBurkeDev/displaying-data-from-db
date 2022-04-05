<?php
require_once 'config/dbconfig.php';

// gets data for Country Dropdown
function getCountries() {
   
    $conn = get_dbc();
    // Query a db table named country_notification
    $sql = "SELECT DISTINCT country FROM country_notification";
    $result = $conn->query($sql);
    if ($result != null) {
        // echo "Database queried";
        // echo '<form action="#">';
        echo '<div class="form-group">';
        echo '<label class="form-label" for="countries">Choose a Country to show data:</label>';
        echo '<select class="form-control" id="countries" name="countries" onchange="showCountryData(this.value)">';
        echo '<option value="">Choose a Country:</option>';
          
        while ($row = $result->fetch_assoc()) {
           
            echo "<option value='".$row['country']."'>".$row['country']." </option>";
    
        }
        
        echo '</select>';
        echo '</div>';
        // echo '</form>';
    
    } else {
        echo "Error querying database: " . $conn->error;
    }
    // closing connection
    $conn->close();
}

// gets data for Year Week Dropdown
function getYearWeek() {
   
    $conn = get_dbc();
    // Query a db table named country_notification
    $sql = "SELECT DISTINCT year_week FROM country_notification";
    $result = $conn->query($sql);
    if ($result != null) {
        // echo "Database queried";

        echo '<div class="form-group">';
        echo '<label class="form-label" for="countries">Choose a Year Week to show data:</label>';
        echo '<select class="form-control" id="year_week" name="year_week">';
             
        while ($row = $result->fetch_assoc()) {
            
            echo "<option value='".$row['year_week']."'>".$row['year_week']." </option>";
           
        }
        echo '</select>';
        echo '</div>';
 
    } else {
        echo "Error querying database: " . $conn->error;
    }
    // closing connection
    $conn->close();
}
?>

<div class="data-filter-container shadow-sm bg-light p-4">
    <form class="data-filter-form">
        <?php getCountries(); ?>    
        <?php getYearWeek(); ?>    
    </form>
</div>

   
