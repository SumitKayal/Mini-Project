<?php

 session_start();
 include ('../config.php');

 if($_SESSION['email']==""){
  header("Location: 1.LogIn/logIn.html");
  exit();
}

$course1=$_POST['course1'];
$course2=$_POST['course2'];
$course3=$_POST['course3'];
$email=$_POST['email'];

if($course1!="selcourse") {
    $sql="INSERT INTO assign_course(email,course_id) VALUES ('$email','$course1')";
    $conn->query($sql);
}
if($course2!="selcourse") {
    $sql="INSERT INTO assign_course(email,course_id) VALUES ('$email','$course2')";
    $conn->query($sql);
}
if($course3!="selcourse") {
    $sql="INSERT INTO assign_course(email,course_id) VALUES ('$email','$course3')";
    $conn->query($sql);
}

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