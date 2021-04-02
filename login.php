<?php
ob_start();
session_start();

include "database.php";
include "checkLogin.php";
include "forgotEmail.php";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <!-- Lato and Raleway -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Raleway&display=swap" rel="stylesheet">
</head>
  <body>
    <div id="email">
      <div class="email-content">
        <h2>Forgot your password?</h2>
        <div class ="success"> <?php echo $success ?> </div>
        <center>
          <form action="" method="post">
            <input type="email" class="input_email" name="forgot_email" placeholder="Enter Email Here" autocomplete="off" required>
            <button class="button_email" type="submit" name="button_forgot">Submit</button>
          </form>
          <p id="email-desc">Please input your email. The OUR will soon send you your new password in your email. </p>
          <a href="#" class="close-email">&times;</a>
        </center>
      </div>
    </div>

    <div class="container">
      <div class="item left">
        <div class="singco-text"> SINGCO </div>
        <p class="singco-desc"> Welcome to project SInGCo or Software User Interface for GWA Computation. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="item right">
        <div class="item circle_container">
          <center>
              <form id = "login_form" class="circle bounce-anim pulse-anim" method="post">
                  <img src="img/icons/user.svg" class ="user-icon inside_circle_item">
                  <h4> Sign In </h4>
                  <div class="error"> <?php echo $error ?> </div>
                  <input type="text" class="inside_circle_item" placeholder="Enter Username" autocomplete="off" name="uname" required>
                  <input type="password" class="inside_circle_item" placeholder="Enter Password" name="psw" required>
                  <a id="forgot" href="#email"> Forgot Password? </a>
                  <button type="submit" name="button_login">Login</button>
              </form>
          </center>
        </div>
      </div>
    </div>
  </body>
</html>
