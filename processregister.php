<?php session_start();

require_once('functions/user.php');

date_default_timezone_set("Africa/Lagos");

//Collecting the data

$errorCount = 0;

//Verifying the data, validation

$first_name = $_POST['first_name'] != "" ? $_POST['first_name'] : $errorCount++;
$last_name = $_POST['last_name'] != "" ? $_POST['last_name'] : $errorCount++;
$email = $_POST['email'] != "" ? $_POST['email'] : $errorCount++;
$password = $_POST['password'] != "" ? $_POST['password'] : $errorCount++;
$phone = $_POST['phone'] != "" ? $_POST['phone'] : $errorCount++;
$gender = $_POST['gender'] != "" ? $_POST['gender'] : $errorCount++;
$level = $_POST['level'] != "" ? $_POST['level'] : $errorCount++;


$_SESSION['first_name'] = $first_name;
$_SESSION['last_name'] = $last_name;
$_SESSION['email'] = $email;
$_SESSION['phone'] = $phone;
$_SESSION['gender'] = $gender;
$_SESSION['level'] = $level;


if($errorCount > 0){
    //display proper messages to the user

    $session_error = "You have " . $errorCount . "  error";

   
    if($errorCount > 1){
        $session_error .= "s";
    }  
    
    $session_error .= " in your submission";
    $_SESSION["error"] = $session_error;   
    header("Location: register.php");

    
} else {


  
    $newUserId = $countAllUsers - 1;

    $userObject = [
        'id' => $newUserId,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
        'password' => password_hash($password,PASSWORD_DEFAULT), //pasword hashing
        'phone'=>$phone,
        'gender' => $gender,
        'level' => $level,
        'date'=>date("d/m/Y"),
        'time'=>date("h:i:sa")             
    ];

    //check if the user already exist
    $userExists = find_user($email);

          if($userExists){
            $_SESSION["error"] = "Registration Failed, User already exist!";
            header("Location: register.php");
            die();
        }

  //save in the database
  save_user($userObject); 
  

   $_SESSION["message"] = "Registration Successful, You can now login!" . $first_name;
   header("Location: login.php");

}

// Validating email entry
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email is a valid email address");
    } else {
    $_SESSION["error"] = "Invalid Email address" ;
      header("Location: register.php");
    }
  // validate first name 
    if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
    $_SESSION["error"] = "For names Only letters and white space allowed" ;
      header("Location: register.php");
     }
  // validate last name
    if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
    $_SESSION["error"] = "For names Only letters and white space allowed" ;
    header("Location: register.php");}

    ?>
