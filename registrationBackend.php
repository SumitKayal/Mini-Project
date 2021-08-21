<?php
include ("config.php");

$name=$_POST['name'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$type=$_POST['type'];
$course1=$_POST['course1'];
$course2=$_POST['course2'];
$course3=$_POST['course3'];
$address=$_POST['address'];
$cv=$_POST['cv'];


$sql="INSERT INTO professor (Email, Name, Type, dob, Gender)
         VALUES ('$email', '$name', '$type', '$dob', '$gender')";
 
if($conn->query($sql)){
    $sql1="INSERT INTO temporay_prf_course (email,course1,course2,course3) 
           VALUES ('$email','$course1','$course2','$course3' ) ";
    
    if($conn->query($sql1)){
        header("Location: 2.Registration\massage.html");
    }
}
?>
