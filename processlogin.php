<?php session_start();



$errorCount = 0;


$email = $_POST['email'] != "" ? $_POST['email'] : $errorCount++;
$password = $_POST['password'] != "" ? $_POST['password'] : $errorCount++;


$_SESSION['email'] = $email;



if($errorCount > 0){
    //display proper messages to the user

    $session_error = "You have " . $errorCount . "  error";

   
    if($errorCount > 1){
        $session_error .= "s";
    }  
    
    $session_error .= " in your submission";
    $_SESSION["error"] = $session_error;   
    header("Location: login.php");

    
} else {


    $allUsers = scandir("db/users/");

    $countAllUsers = count($allUsers);

    for($counter = 0; $counter < $countAllUsers; $counter++){

        $currentUser = $allUsers[$counter];

        if($currentUser == $email . ".json"){
        //check for your password
         $userString = file_get_contents("db/users/" . $currentUser);
         $userObject = json_decode($userString);
         $passwordFromDB = $userObject->password;

         $passwordFromUser = password_verify($password, $passwordFromDB);

         if($passwordFromDB == $passwordFromUser){

            $_SESSION['loggedIn'] = $userObject->id;
            $_SESSION['email'] = $userObject->email;
            $_SESSION['first_name'] = $userObject->first_name ;
            $_SESSION['last_name'] = $userObject->last_name;
            $_SESSION['level'] = $userObject->level;
            $_SESSION['time'] = $userObject->time;
            $_SESSION['date'] = $userObject->date;
            
            if ($_SESSION["level"] == "Novice"){
                    
                header('Location: dashboard.php');
                die();
            } else if($_SESSION["level"] == "Beginner") {
                header('Location: dashboard.php');
                die();
            } else if($_SESSION["level"] == "Intermediate") {
                header('Location: dashboard.php');
                die();
            } else if($_SESSION["level"] == "Advanced"){
                header('Location: dashboard.php');
            }
    } 
 }          
}  

    $_SESSION["error"] = "Invalid Email or Password!";
    header("Location: login.php");
    die();
}

?>
