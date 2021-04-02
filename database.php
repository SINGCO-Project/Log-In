<?php
$servername = "localhost";
$username = "root";
$password = "p@ssw0rd";

try {
  $conn = new PDO("mysql:host=$servername;dbname=login", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
