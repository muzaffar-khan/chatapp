<?php
  $hostname = "database-1.cpzadqwftti7.us-east-1.rds.amazonaws.com";
  $username = "root";
  $password = "admin1234";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
