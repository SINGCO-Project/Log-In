<?php
ob_start();
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/login.css">
    <!-- Lato and Raleway -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Raleway&display=swap" rel="stylesheet">
    <!-- Icons -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</head>
  <body>
  <div class="container">
    <div class="item left">
      <h1> SINGCO </h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="item right">
      <div class="item circle_container">
        <center>

          <form class="circle bounce-anim" action="action_page.php" method="post">
              <ion-icon class="inside_circle_item" name="person-circle-outline" size="large"></ion-icon>
              <h4> Sign In </h4>
              <input type="text" class="inside_circle_item" placeholder="Enter Username" autocomplete="off" name="uname" required>
              <input type="password" class="inside_circle_item" placeholder="Enter Password" name="psw" required>
              <button type="submit" >Login</button>
          </form>
        </center>
      </div>

    </div>

  </div>

  </body>
</html>
