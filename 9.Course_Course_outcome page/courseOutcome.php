<?php



 session_start();
 include ('../config.php');

 if($_SESSION['email']==""){
  header("Location: ../1.LogIn/logIn.html");
  exit();
}


$id=$_GET['id'];
$year=$_GET['year'];

$sql1="DELETE FROM course_outcome WHERE  cid='$id' AND year='$year'";
$conn->query($sql1);

for ($x=1;$x<=$_POST['numCO'];$x++) {

    $coname="CO".$x;
    $coTextName="COtext".$x;
    $cotext=$_POST[$coTextName];

    $sql="INSERT INTO course_outcome( cid , outcomeName , outcome) VALUES ('$id','$coname','$cotext')";
    $conn->query($sql);

}


header("Location: ../8.Course start Page\Course start Page.php?id=".$id."&year=".$year."&email=".$_SESSION['email']);
exit();
?>