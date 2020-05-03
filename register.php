<?php  include_once('lib/register_header.php'); 

require_once('functions/alert.php');
if(isset($_SESSION['loggedIn']) && !empty($_SESSION['loggedIn'])){
    // redirect to dashboard
    header("Location: dashboard.php");
}

?>

<div class="container">

        <div class="centered_title">

            <h3 class="branded">FrontDevie</h3>

        </div>
        
        <div class="container_form">

        <div class="centered_content">

            <h3>Create Your FrontDevie Account</h3>

            <p>Welcome to Class, Let's learn Together!</p>
        
        </div>

        <form method="POST" action="processregister.php">
            
            <p>
                <?php  print_alert(); ?>
            </p>
            
            <p>
                <label>First Name</label><br />
                <input  
                <?php              
                    if(isset($_SESSION['first_name'])){
                        echo "value=" . $_SESSION['first_name'];                                                             
                    }                
                ?>
                type="text" name="first_name" placeholder="First Name" />
            </p>
            <p>
                <label>Last Name</label><br />
                <input
                <?php              
                    if(isset($_SESSION['last_name'])){
                        echo "value=" . $_SESSION['last_name'];                                                             
                    }                
                ?>
                type="text" name="last_name" placeholder="Last Name"  />
            </p>
            <p>
                <label>Email</label><br />
                <input
                
                <?php              
                    if(isset($_SESSION['email'])){
                        echo "value=" . $_SESSION['email'];                                                             
                    }                
                ?>

                type="email" name="email" placeholder="Email"  />
            </p>
            <p>
                <label>Password</label><br />
                <input type="password" name="password" placeholder="Password"  />
            </p>
            <p>
                <label>Phone Number</label><br />
                <input
                
                <?php              
                    if(isset($_SESSION['email'])){
                        echo "value=" . $_SESSION['email'];                                                             
                    }                
                ?>

                type="text" name="phone" placeholder="Phone Number"  />
            </p>
          
            <p>
                <label>Gender</label><br />
                <select name="gender" >
                <?php              
                    if(isset($_SESSION['department'])){
                        echo "value=" . $_SESSION['department'];                                                             
                    }                
                ?>
                    <option value="">Select One</option>
                    <option 
                    <?php              
                        if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Female'){
                            echo "selected";                                                           
                        }                
                    ?>
                    >Female</option>
                    <option 
                    <?php              
                        if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Male'){
                            echo "selected";                                                           
                        }                
                    ?>
                    >Male</option>
                </select>
            </p>

            <p>
                <label>Current Level</label><br />
                <select name="level" >
                
                    <option value="">Select One</option>
                    <option 
                    <?php              
                        if(isset($_SESSION['level']) && $_SESSION['level'] == 'Novice'){
                            echo "selected";                                                           
                        }                
                    ?>
                    >Novice</option>
                    <option 
                    <?php              
                        if(isset($_SESSION['level']) && $_SESSION['level'] == 'Beginner'){
                            echo "selected";                                                           
                        }                
                    ?>
                    >Beginner</option>
                    <option 
                    <?php              
                        if(isset($_SESSION['level']) && $_SESSION['level'] == 'Intermediate'){
                            echo "selected";                                                           
                        }                
                    ?>
                    >Intermediate</option>
                    <option 
                    <?php              
                        if(isset($_SESSION['level']) && $_SESSION['level'] == 'Advanced'){
                            echo "selected";                                                           
                        }                
                    ?>
                    >Advanced</option>
                </select>
            </p>
            <p>
                <button class="btn-reg" type="submit">CREATE ACCOUNT</button>
            </p>

            
        </form>

        </div>

        <div class="login_contents">
            <p>
                        <a class="forgot" href="forgot.php">Forgot Password</a><br />
                        <a class="login" href="login.php">Already have an account? Login</a>
            </p>
        </div>

</div>

<?php include_once('lib/footer.php'); ?>