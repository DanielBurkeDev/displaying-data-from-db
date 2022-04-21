<?php
	require_once('auth.php');
	$page = 'member profile'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Profile</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
<link rel="stylesheet" href="dist/styles.css">
<link rel="stylesheet" href="dist/header.css">
<script>

function toggleFormElements(bDisabled) { 
        var inputs = document.getElementsByTagName("input"); 
        for (var i = 0; i < inputs.length; i++) { 
            inputs[i].disabled = bDisabled;
        } 
        var selects = document.getElementsByTagName("select");
        for (var i = 0; i < selects.length; i++) {
            selects[i].disabled = bDisabled;
        }
        var textareas = document.getElementsByTagName("textarea"); 
        for (var i = 0; i < textareas.length; i++) { 
            textareas[i].disabled = bDisabled;
        }
        var buttons = document.getElementsByTagName("button");
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].disabled = bDisabled;
        }
    }
</script>

</head>
<body onload="toggleFormElements(true)">
	<?php include 'includes/headers/header.php';?> 
	<div class="content-container">
        <div class="content-card border-rad bg-light p-4">
            
			<h1>My Profile </h1>
			<a href="member_index.php">Home</a> | <a href="logout.php">Logout</a> | <a class="red" href="javascript: void(0)" onclick="toggleFormElements(false)">Edit</a>
			<?php include 'db/profile-form.php';?> 
		</div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/postProfileData.js"></script>
<script src="js/jquery.validate.js"></script>
<script>
    $("form").validate();
</script>
</body>
</html>
