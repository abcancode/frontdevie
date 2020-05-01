<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FrontDevie | Create Account</title>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&family=Sansita:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/register.css">

    <script src="js/script.js"></script>
</head>
<body>

<div class="header">
    <div class="brand">
        <h2><a href="index.php" class="logo">FrontDevie</a></h2>
    </div>
    
    <nav class="navbar">
            <a class="nav-link" href="index.php">Home</a>
            
            <?php if(!isset($_SESSION['loggedIn'])){ ?>
                

                <a class="nav-link" href="#interact">Interact</a>
                <a class="nav-link" href="#learn">Learn</a>
                <a class="nav-link" href="#build">Build</a>
                <!--<a class="btn btn-success" href="admin.php">Admin</a>-->
                <!-- <a class="p-2 text-dark" href="forgot.php">Forgot Password</a> -->
            <?php }else{ ?>
                
                <!--<a class="p-2 text-dark" href="dashboard.php">Dashboard</a> -->               
                <a class="nav-link" href="reset.php">Reset Password</a>
                <a class="nav-link" href="logout.php">Logout</a>
            <?php } ?>
          
        </nav>
       
    </div>