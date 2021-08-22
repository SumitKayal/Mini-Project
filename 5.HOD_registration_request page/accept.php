<?php

 session_start();
 include ('../config.php');

 if($_SESSION['email']==""){
  header("Location: 1.LogIn/logIn.html");
  exit();
}

$email=$_GET['id'];



$sql="SELECT Name,dob FROM professor WHERE Email='$email'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$name=strtolower(explode(" ",$row['Name'])[0]);
$dob=explode("-",$row['dob'])[0];
$password=$name.$dob;
$sql="UPDATE `professor` SET `Password`='$password' WHERE Email='$email'";
$conn->query($sql);

$sql="DELETE FROM temporay_prf_course WHERE email='$email'";
$conn->query($sql);

header("Location: ../5.HOD_registration_request page\HOD_registration_request page.php");

exit();

 ?>