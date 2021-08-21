<?php
 session_start();
 include ('../config.php');
 if($_SESSION['email']==""){
  header("Location: ../1.LogIn/logIn.html");
  exit();
}

$email=$_GET['email'];
  if($email!=NULL){

    $_SESSION['email']=$email;
  }
  $email=$_SESSION['email'];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="FacMemHome.css">

    <title>Home</title>
</head>
<body>
   <!--Navbar-->
  <nav class="shadow p-3 mb-5 bg-body rounded navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
    
    <div id="main ">
      <button class="openbtn" onclick="openNav()">☰ </button>  
      
      
    </div> 
    <div id="mySidebar" class="sidebar  ">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a href="D:\Mini Project\7.Faculty Member Home Page\FacMemHome.html">Home</a>
      <a href="#">Notification</a>
      <a href="#">Contact</a>
      <a href="../logOut.php">Log Out </a>
    </div>
    <a class="navbar-brand" href="D:\Mini Project\7.Faculty Member Home Page\FacMemHome.html">
        <img class="UnivLogo " src="Image/univLogo.png" alt="univLogo">
           University of Calcutta</a>
  
  <div class="ml-auto ">
    <img class="Profile_img shadow" src="Image/FM1.jpg" alt="profile-pic">
  </div>
</nav>
<!--End Navbar-->

<!--Heading Block background-->
<div class="headingBlock">
    <h1 class="headingBlock_h1">Welcome  <?php $email= $_SESSION['email'];
    $sql="SELECT name FROM professor WHERE email='$email'";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()){
      echo $row['name'];
    }
    ?>:)</h1>
</div>

<!--End Heading Blobk Background-->

<!--courses assigned block-->
 <div class="row container-fluid">
  <div class="col-md-4 sub " >
    <h2 class="heading3" >Courses Assigned</h2>
  </div>

  
</div>

<!--End courses assigned block-->

<!--Courses-->
<?php
  $sql="SELECT a.course_id,c.CourseName,a.year FROM assign_course a,course c WHERE a.email='$email' AND a.course_id=c.CID";
  $result=$conn->query($sql);
  while($row=$result->fetch_assoc()){

  
?>
<div class="course">
<a class="cardAnchorTag" href="../8.Course start Page\Course start Page.php?id=<?php echo $row['course_id'];?>&year=<?php echo $row['year'];?>">
  <div class="card" >
    <div class="card-body">
      <h5 class="card-title" >Program : Bachelor of Technology</h5>
      <p class="card-text">
        <span>Course Code : </span>
        <span class="courseCode" style=" margin-right: 1%;"><?php echo $row['course_id'] ?></span>
        <span>Course Name : </span>
        <span class="courseName" style=" margin-right: 1%;"><?php echo $row['CourseName']?></span>
        <span>Year : </span>
        <span class="year" style=" margin-right: 1%;"><?php echo $row['year']?></span>
      </p>
    </div>
  </div>
</a>
</div>
<?php } ?>


<!--End Courses-->



          
    
<script src="FacMemHome.js" charset="utf-8"></script>
</body>
</html>