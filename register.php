<?php

require_once 'config/config.php';
require_once 'includes/form/register.php';
require_once 'includes/form/login.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="assets/css/register_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>
</head>
<body>


    <?php

    if (isset($_POST['register_button'])) {
        echo '
        <script>

        $(document).ready(function(){
          $("#first").hide();
          $("#second").show();  
        } )

        </script>
        ';
    }

    ?>

<div class="wrapper">


    <div class="login_box">

    <div class="login_header">
    <h1>Nenfeed!</h1>
    Login or sign up below!
    </div>

<br>
    <div id="first">
            <form action="register.php" method="post">

        <input type="email" name="log_email" placeholder="Email Address" required value="<?php
            if (isset($_SESSION['log_email'])) {
                echo $_SESSION['log_email'];
            }
            ?>" >
        <br>
        <input type="password" name="log_password" placeholder="Password">
        <br>
        <?php if (in_array("Email or Password was incorrect<br>", $error_array)) {
                echo "Email or Password was incorrect<br>";
            }  ?>
        <input type="submit" name="login_button" value="Login">
        <br>
        <a href="#" id="signup" class="signup">Need an account? Register here!</a>
            

        </form>
    </div>



        <!-- <br> -->
            
            <div id="second">

            

            <form action="register.php" method="POST">
            <input type="text" name="reg_fname" placeholder="First Name" required value="<?php
            if (isset($_SESSION['reg_fname'])) {
                echo $_SESSION['reg_fname'];
            }
            ?>"  >
            <br>

            <?php if(in_array('Your first name must be between 2 and 25 characters<br>', $error_array )) echo 'Your first name must be between 2 and 25 characters<br>'  ?>

            <input type="text" name="reg_lname" placeholder="Last Name" required value="<?php
            if (isset($_SESSION['reg_lname'])) {
                echo $_SESSION['reg_lname'];
            }
            ?>" >
            <br>
            <?php if(in_array('Your last name must be between 2 and 25 characters<br>', $error_array )) echo 'Your last name must be between 2 and 25 characters<br>'  ?>


            <input type="text" name="reg_email" placeholder="Email" required value="<?php
            if (isset($_SESSION['reg_email'])) {
                echo $_SESSION['reg_email'];
            }
            ?>" >
            <br>

            <input type="text" name="reg_email2" placeholder="Confirm Email" value="<?php
            if (isset($_SESSION['reg_email2'])) {
                echo $_SESSION['reg_email2'];
            }
            ?>" required  >
            <br>
            <?php if(in_array('Email is already in use<br>', $error_array )) echo 'Email is already in use<br>'; 
            
            else if(in_array('Invalid email Format<br>', $error_array )) echo 'Invalid email Format<br>' ; 

            else if(in_array('Emails don\'t match<br>', $error_array )) echo 'Emails don\'t match<br>'  ?>



            <input type="password" name="reg_password" placeholder="Password" required >
            <br>
            <input type="password" name="reg_password2" placeholder="Confirm Password" required  >
            <br>

            <?php if(in_array('Your passwords don\'t match<br>', $error_array )) echo 'Your passwords don\'t match<br>'; 
            
            else if(in_array('The password can only contain English characters or numbers<br>', $error_array )) echo 'The password can only contain English characters or numbers<br>' ; 

            else if(in_array('Your password must be between 5 and 30 characters<br>', $error_array )) echo 'Your password must be between 5 and 30 characters<br>'  ?>



            <input type="submit" name="register_button" value="Register">

            <br>

            <?php if(in_array("<span style='color: #14C800;'> You're all set, go ahead and login </span><br>", $error_array )) echo "<span style='color: #14C800;'> You're all set, go ahead and login </span><br>"  ?>

            <a href="#" id="signin" class="signin">Already have an account? Sign in here!</a>






            </form>
            </div>

    </div>
    </div>


</body>
</html>