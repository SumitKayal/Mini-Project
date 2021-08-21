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
$email=$_POST['prof'];

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



header("Location: ../HODhome.php");

exit();

 ?>