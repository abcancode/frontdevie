<?php  include_once('lib/login_header.php'); 

require_once('functions/alert.php');

if(isset($_SESSION['loggedIn']) &&  ($_SESSION['loggedIn'])){
    // redirect to dashboard
    header("Location: dashboard.php");
}

?>

<div class="container">

    <div class="centered_title">

        <h3 class="branded">FrontDevie</h3>

    </div>

    <div class="container_form">
        <p>
        <?php  print_alert(); ?>
        </p>
        <div class="centered_content">

            <h3>Login to your Account</h3>

            <p>Please login to your FrontDevie account</p>

        </div>
        
        <form method="POST" action="processlogin.php">
    
                
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
                <label>Password</label><br />
                <input type="password" name="password" placeholder="Password"  />
            </p>       
        
        
            <p>
                <button class="btn-reg" type="submit">LOGIN</button>
            </p>
            
        </form>
    </div>
            <div class="register_contents">
                <p>
                    <a class="forgot" href="forgot.php">Forgot Password</a><br />
                    <a class="register" href="register.php">Don't have an account? Register</a>
                </p>
            </div>
            
</div>

<?php include_once('lib/footer.php'); ?>