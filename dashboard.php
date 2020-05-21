<?php include_once('lib/dashboard_header.php');

if(!isset($_SESSION['loggedIn'])){
    //redirect to dashboard
    header("Location: login.php");
}
?>

    <div class="main">
        
        <div class="container">

            <div class="first_section">

                <div class="font-awesome">

                    <i class="fas fa-user-circle fa-3x" style="color:rgb(33, 101, 156)"></i>

                </div>

                <div class="content">

                    <h4>Profile</h4>

                    <ul>

                        <li>Full Name: <?php echo $_SESSION['first_name'] ." ". $_SESSION['last_name'] ?> </li>
                        <li>Email: <?php echo $_SESSION['email'] ?></li>
                        <li>Current Level: <?php echo $_SESSION['level'] ?></li>                       
                        <li>ID: <?php echo $_SESSION['loggedIn'] ?> </li>

                    </ul>

                </div>

            </div>

            <div class="second_section">
             
            <div class="font-awesome">

                <i class="fas fa-envelope fa-3x" style="color:rgb(33, 101, 156)"></i>

            </div>

            <div class="content">

                <h4>Welcome Message</h4>

                <p>Hi,  <?php echo $_SESSION['first_name'] ?>. We're so delighted to have you on board. You will recieve a mail shortly in the email you provided while registering for next steps, kindly check for that. The program would last for 12 weeks and we expect that you'll put in work so you can get the very best out of the program. Please make payment to the account details below and ensure you keep a copy of your reciept.<br />
                
                </p>
            
            </div>

            </div>

            <div class="third_section">

                <div class="font-awesome">

                    <i class="fas fa-book-reader fa-3x" style="color:rgb(33, 101, 156)"></i>
                
                </div>

                <div class="content">

                    <h4>Course Outline</h4>

                    <ul>

                        <li>GIT/GITHUB</li>
                        <li>Hypertext Markup Language(HTML)</li>
                        <li>Cascading Stylesheet(CSS)</li>
                        <li>Bootstrap</li>
                        <li>JavaScript</li>
                        <li>jQuery</li>
                        
                    </ul>
                
                </div>

            </div>
            
            <div class="fourth_section">

            <div class="font-awesome">

                <i class="fas fa-list-alt fa-3x" style="color:rgb(33, 101, 156)"></i>

            </div>

            <div class="content">

                <h4>Tasks</h4>

                <p class="task_content">There are no tasks just yet. Please check back!</p>
            
            </div>

            </div>

        </div>

    </div>


    <?php include_once('lib/dashboard_footer.php'); ?>
    

