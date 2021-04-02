<?php

$error = "";

if(isset($_POST['button_login'])) {
  $username = trim($_POST['uname']);
  $password = trim($_POST['psw']);

    try {
      $query = "select * from `users` where `username`=:username and `password`=:password";
      $stmt = $conn->prepare($query);
      $stmt->bindParam('username', $username, PDO::PARAM_STR);
      $stmt->bindValue('password', $password, PDO::PARAM_STR);
      $stmt->execute();
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
      if($count == 1 && !empty($row)) {
        //set session variables here if there are
        header("Location: index.html");
      } else {
        $error = "Invalid username or password.";
      }
    } catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
    }

}
?>
