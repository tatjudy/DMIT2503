<?php

$con = mysqli_connect("localhost", "jtat2","SCgU0spSsIG7Gfs","jtat2_dmit2503");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//This stops SQL Injection in POST vars 
  foreach ($_POST as $key => $value) { 
    $_POST[$key] = mysqli_real_escape_string($con,$value); 
  } 

  //This stops SQL Injection in GET vars 
  foreach ($_GET as $key => $value) { 
    $_GET[$key] = mysqli_real_escape_string($con,$value); 
  }

?>