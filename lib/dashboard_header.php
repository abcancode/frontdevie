<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FrontDevie | Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Kurale&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard.css" type="text/css">
    <script src="https://kit.fontawesome.com/836bbe789f.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</head>
<body>

<div class="header">
    <div class="brand">
        <h3><a class="logo">Dashboard</a></h3>
    </div>
    
    <nav class="navbar">
            <!--<a class="nav-link" href="index.php">Home</a>-->
            <a class="nav-link">Welcome, <?php echo $_SESSION['first_name'] ." ". $_SESSION['last_name'] ?> </a> 
            <a class="nav-link"><?php echo $_SESSION['email'] ?> </a> 
            <?php if(!isset($_SESSION['loggedIn'])){ ?>

                <!--<a class="btn btn-success" href="admin.php">Admin</a>-->
                <!-- <a class="p-2 text-dark" href="forgot.php">Forgot Password</a> -->
            <?php }else{ ?>
                            
                <!--<a class="p-2 text-dark" href="dashboard.php">Dashboard</a> -->               
                <a class="nav-link" href="reset.php">Reset Password</a>
                <a class="nav-link" href="logout.php">Logout</a>
            <?php } ?>
          
    </nav>
       
</div>