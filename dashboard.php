<?php include_once('lib/dashboard_header.php');

if(!isset($_SESSION['loggedIn'])){
    //redirect to dashboard
    header("Location: login.php");
}
?>

<h3>Dashboard</h3>


    Welcome, <?php echo $_SESSION['first_name'] ?>, You are logged in as (<?php echo $_SESSION['level'] ?>), and your ID is <?php echo $_SESSION['loggedIn'] ?>



