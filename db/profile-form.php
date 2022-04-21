<?php
require_once('auth.php');
require_once 'config/dbconfig.php';


//Console log function
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

// get profile data of current logged in user
function getProfileData() {
    $userid = $_SESSION['SESS_MEMBER_ID'];
    // console_log($userid);
    $conn = get_dbc();
    // Query a db table named country_notification
    $sql = "SELECT * FROM users WHERE id = $userid";


    $result = $conn->query($sql);


    if ($result != null) {

        while ($row = $result->fetch_assoc()) {
            echo '<div class="form-group mb-3">';
            echo '<label for="fname">First Name</label>';
            echo '<input type="text"  name ="fname" class="form-control" id="fname" minlength="2" required placeholder="' . $row['firstname'] . '">';
            echo  '</div>';
            echo '<div class="form-group mb-3">';
            echo '<label for="lname">Last Name</label>';
            echo '<input type="text" minlength="2" required name = "lname" class="form-control" id="lname" placeholder="' . $row['lastname'] . '">';
            echo '</div>';
            echo '<div class="form-group mb-3">';
            echo '<label for="uname">User Name</label>';
            echo '<input type="text" autocomplete="username" name="uname" minlength="2" required class="form-control" id="uname" placeholder="' . $row['username'] . '">';
            echo '</div>';
            echo '<div class="form-group mb-3">';
            echo '<label for="email">Email address</label>';
            echo '<input type="email" required name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="' .$row['email'] . '">';
            echo '<br><small id="emailHelp" class="form-text text-muted">We will never share your email with anyone else.</small>';
            echo '</div>';
            echo '<div class="form-group mb-3">';
            echo '<label for="password">Password</label>';
            echo '<input type="password" class="form-control" id="password" autocomplete="new-password" name="password">';
            echo '</div>';
            echo '<div class="form-group mb-3">';
            echo '<label for="cpassword">Confirm Password</label>';
            echo '<input type="password" class="form-control" id="cpassword" autocomplete="new-password" name="cpassword">';
            echo '</div>';
        }
    
    } else {
        echo "Error querying database: " . $conn->error;
    }
    // closing connection
    $conn->close();
}

?>

<form id="updateProfileForm" name="updateProfileForm" method="post" action="javascript:void(0);" onsubmit="postData(this)">
    <?php getProfileData(); ?>    
    <button type="submit" class="btn btn-primary mb-3" name="Update" value="Update">Update</button>
</form>
   
