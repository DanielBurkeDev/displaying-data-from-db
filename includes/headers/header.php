<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
// nav menu text
$logo = 'COVID 19 DATA';

$li1 = 'Home';
$li2 = 'Database Data';
$li3 = 'API Data';
$li4 = 'Register';
$li5 = 'Sign In';
$li6 = 'Profile';
$li7 = 'Logout';



?>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><?php echo $logo ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if ($page=='home'){echo 'active';} ?>" <?php if ($page=='home'){echo 'aria-current="page"';} ?>  href="index.php"><?php echo $li1 ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($page=='database view'){echo 'active';} ?>" <?php if ($page=='database view'){echo 'aria-current="page"';} ?>   href="dbview.php"><?php echo $li2 ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><?php echo $li3 ?></a>
        </li>
      
      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php 
        if(!isset($_SESSION['SESS_MEMBER_ID'])) {?>

        <li class="nav-item"><a class="nav-link <?php if ($page=='register view'){echo 'active';} ?>" <?php if ($page=='register view'){echo 'aria-current="page"';} ?>  href='register-view.php'><?php echo $li4 ?></a></li>
        <li class="nav-item"><a class="nav-link <?php if ($page=='login view'){echo 'active';} ?>" <?php if ($page=='login view'){echo 'aria-current="page"';} ?> href='login-view.php'><?php echo $li5 ?></a></li>

        <?php } else {?>

        <li class="nav-item"><a class="nav-link <?php if ($page=='member profile'){echo 'active';} ?>" <?php if ($page=='member profile'){echo 'aria-current="page"';} ?> href='member-profile.php'><?php echo $li6 ?></a></li>
        <li class="nav-item"><a class="nav-link <?php if ($page=='logout'){echo 'active';} ?>" <?php if ($page=='logout'){echo 'aria-current="page"';} ?> href='logout.php' ><?php echo $li7 ?></a></li>

        <?php } ?>
      </ul>
    </div>
  </div>
</nav>

