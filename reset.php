<?php    include('lib/reset_header.php');
        require_once('functions/user.php');
//if token is set

if(!is_user_loggedIn() && !is_token_set()){
    $_SESSION["error"] = "You are not authorized to view that page";
    header("Location: login.php"); 
}
?> 

<div class="container">

<div class="centered_title">

    <h3 class="branded">FrontDevie</h3>

</div>

<div class="container_form">

<div class="centered_content">
   
    <h3>Reset Password</h3>

    <p>Please Reset your Password</p>
</div>

    <form action="processreset.php" method="POST">

    <p>

       <?php print_alert(); ?>

    </p>
    <?php if(!is_user_loggedIn()) { ?>
    <input 

        <?php
            if(is_token_set_in_session()){
                echo "value='" . $_SESSION['token'] . "'";
            }else{
                echo "value='" . $_GET['token'] . "'";
            }
        ?>        
        type="hidden" name="token" />
        <?php } ?>

        <p>
            <label>Email</label> <br />
            <input
                <?php

                    if(isset($_SESSION['email'])){
                        echo "value=" . $_SESSION['email'];
                    }
            
                ?>
                
                type="email" name="email" placeholder="Email"  />
        </p>
        
        <p>
            <label>Enter New Password</label> <br />
            <input type="password" name="password" placeholder="Password" />
        </p>

        <p>
            <button class="btn-reg" type="submit">Reset Password</button>
        </p>
     
    </form>
        
</div>

</div>






