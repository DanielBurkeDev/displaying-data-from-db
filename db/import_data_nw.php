// THIS IMPORTS DATA TO THE DATABASE FROM THE JSON FILE
<?php
set_time_limit(500);


//Console log function
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

$connect = mysqli_connect("localhost", "db-urke", "FiadhFinn", "coviddb"); 
$query = '';
$table_data = '';
// json file name
$filename = "data/datasml.json";
// Read the JSON file in PHP
$data = file_get_contents($filename); 

// console_log($data);

// Convert the JSON String into PHP Array
$array = json_decode($data, true); 

// Extracting row by row
foreach($array as $row) {

    // console_log($row);

    // Database query to insert data 
    // into database Make Multiple 
    // Insert Query 
    
    // prepare and bind
$stmt = $connect->prepare("INSERT INTO country_notification (country, country_code, continent, population, indicator, weekly_count, year_week, rate_14_day, cumulative_count, source) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssss",  $country, $country_code, $continent, $population, $indicator, $weekly_count, $year_week, $rate_14_day, $cumulative_count, $source);

// set parameters and execute

(isset($row["country"])) ? $country = $row["country"] : '';
 (isset($row["country_code"])) ? $country_code = $row["country_code"] : '';
 (isset($row["continent"])) ? $continent = $row["continent"]  : '';
 (isset($row["population"])) ? $population = $row["population"] : '';
 (isset($row["indicator"])) ? $indicator = $row["indicator"] : '';
 (isset($row["weekly_count"])) ? $weekly_count = $row["weekly_count"] : '';
 (isset($row["year_week"])) ? $year_week = $row["year_week"] : '';
 (isset($row["rate_14_day"])) ? $rate_14_day = $row["rate_14_day"] : '';
 (isset($row["cumulative_count"])) ? $cumulative_count = $row["cumulative_count"] : '';
(isset($row["source"])) ? $source = $row["source"] : '';

$stmt->execute();

echo "New records created successfully";

$stmt->close();

}

?>