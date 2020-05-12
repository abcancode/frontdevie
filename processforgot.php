<?php session_start();
require_once('functions/alert.php');
//Collecting the data

$errorCount = 0;

$email = $_POST['email'] != "" ? $_POST['email'] : $errorCount++;


$_SESSION['email'] = $email;

if($errorCount > 0){

    $session_error = "You have " . $errorCount . "  error";

   
    if($errorCount > 1){
        $session_error .= "s";
    }  
    
    $session_error .= " in your submission";
 
    set_alert('error', $session_error);

    header("Location: forgot.php");

} else {

    $allUsers = scandir("db/users/");
    
    $countAllUsers = count($allUsers);


    for($counter = 0; $counter < $countAllUsers ; $counter++){

        $currentUser = $allUsers[$counter];

        if($currentUser == $email . ".json"){
            //send the email, and redirect to the reset password page
           
            /**
             * GENERATING TOKEN CODE STARTS
             * 
             */

            $token = ""; 

            $alphabets = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P'];

            for($i = 0 ; $i < 30 ; $i++){
               
                $index = mt_rand(0,count($alphabets)-1);
                $token .= $alphabets[$index];
            }
            //print_r($token);
            //die();
            /**
             * Token Generation Ends
             */


            $subject = "Password Reset Link";
            $message = "A password reset has been requested from your account, if you did not submit this request, please ignore this message, otherwise, visit: localhost/frontdevie/reset.php?token=".$token;
            $headers = "From: no-reply@frontdevie.com" . "\r\n" .
            "CC: abraham@frontdevie.com";

            file_put_contents("db/tokens/" . $email . ".json", json_encode(['token'=>$token]));
          

            $try= mail($email,$subject,$message,$headers);
            
            //print_r($try);
            //print_r($headers);
            //die();


            if ($try){
                    //send a success message
                    $_SESSION["message"] = "Password reset has been sent to your email: " . $email;
                    header("Location: login.php");

            } else {
                //display error message
                $_SESSION["error"] = "Something went wrong, we could not send password reset to : " . $email;
                header("Location: forgot.php");
            }
            die();
        }
    }
    $_SESSION["error"] = "Email not registered with us" . $email;
    header("Location: forgot.php");

}