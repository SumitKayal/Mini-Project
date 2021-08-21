<?php

 session_start();
 include ('../config.php');

 if($_SESSION['email']==""){
  header("Location: 1.LogIn/logIn.html");
  exit();
}

$email=$_GET['id'];
$sql="DELETE FROM temporay_prf_course WHERE email='$email'";
$conn->query($sql);

$sql="DELETE FROM professor WHERE Email='$email'";
$conn->query($sql);

header("Location: HOD_registration_request page.php");

 ?>