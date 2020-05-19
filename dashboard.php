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

                        <li>Your Name: </li>
                        <li>Level: </li>
                        <li>Current Level:</li>
                        <li></li>

                    </ul>

                </div>

            </div>

            <div class="second_section">
             
            <div class="font-awesome">

                <i class="fas fa-envelope fa-3x" style="color:rgb(33, 101, 156)"></i>

            </div>

            <div class="content">

                <h4>Welcome Message</h4>

                <p>Hi,  <?php echo $_SESSION['first_name'] ?>. We're so delighted to have you on board. You should know that you're IMPORTANT and we've got you throughout the course of this program. </p>
            
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
                    </ul>
                
                </div>

            </div>
            
            <div class="fourth_section">

            <div class="font-awesome">

                <i class="fas fa-list-alt fa-3x" style="color:rgb(33, 101, 156)"></i>

            </div>

            <div class="content">

                <h4>Tasks</h4>

                <p>There are no tasks just yet. Please check back</p>
            
            </div>

            </div>

        </div>

    </div>


    <?php include_once('lib/dashboard_footer.php'); ?>
    

