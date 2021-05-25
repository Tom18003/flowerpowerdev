<?php
$dbconn = mysqli_connect("eu-cdbr-west-01.cleardb.com","bedb44c50f5d82","0ff9e6e2","flowerpower");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
