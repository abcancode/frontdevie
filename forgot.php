<?php include_once('lib/forgot_header.php');  require_once('functions/alert.php'); ?>
   

    <div class="container">

    <div class="centered_title">

        <h3 class="branded">FrontDevie</h3>

    </div>

    <div class="container_form">

    <div class="centered_content">

   <h3>Forgot Password</h3>

   <p>Provide the email address associated with your account</p>

    </div>

   <form action="processforgot.php" method="POST">
   <p>
        <?php print_alert() ; ?>
    </p>
   <p>
        <label>Email</label><br />
        <input
        
        <?php              
            if(isset($_SESSION['email'])){
                echo "value=" . $_SESSION['email'];                                                             
            }                
        ?>

            type="text" name="email" placeholder="Email"  />
    </p>
    <p>
        <button class="btn-reg" type="submit">Send Reset Code</button>
    </p>
   </form>

</div>

</div>








