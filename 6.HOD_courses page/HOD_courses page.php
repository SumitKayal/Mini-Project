<?php

 session_start();
 include ('../config.php');

 if($_SESSION['email']==""){
  header("Location: 1.LogIn/logIn.html");
  exit();
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
<link rel="stylesheet" href="HOD_courses page.css">

    <title>Courses Details</title>
</head>
<body>
   <!--Navbar-->
  <nav class="shadow p-3 mb-5 bg-body rounded navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="background-color: black;">
    
    <div id="main ">
      <button class="openbtn" onclick="openNav()">☰ </button>  
      
      
    </div> 
    <div id="mySidebar" class="sidebar  ">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a href="../HODhome.php">Home</a>
      <a href="#">Notification</a>
      <a href="../5.HOD_registration_request page\HOD_registration_request page.php">Registration Request</a>
      <a href="../4.1.HOD_assign_courses page\HOD_assign_courses page.php">Assign Courses</a>
      <a href="HOD_courses page.php">Courses</a>
      <a href="#">Contact</a>
      <a href="../logOut.php">Log Out</a>
    </div>
    <a class="navbar-brand" href="../HODhome.php">
        <img class="UnivLogo " src="Image/univLogo.png" alt="univLogo">
           University of Calcutta</a>
  
  <div class="ml-auto ">
    <img class="Profile_img shadow" src="Image/FM1.jpg" alt="profile-pic">
  </div>
</nav>
<!--End Navbar-->

<!--Heading Block background-->
<div class="headingBlock">
    <h1 class="headingBlock_h1">Welcome <?php $email= $_SESSION['email'];
      $sql="SELECT name FROM professor WHERE email='$email'";
      $result=$conn->query($sql);
      while($row=$result->fetch_assoc()){
        echo $row['name'];
      }
      ?></h1>
    <div class="anchorHeadingBlock">
    <a class="anchorHB" href="../5.HOD_registration_request page\HOD_registration_request page.php">Registration Request</a>
    <a class="anchorHB" href="../4.1.HOD_assign_courses page\HOD_assign_courses page.php">Assign Courses</a>
    <a class="anchorHB" href="HOD_courses page.php">Courses Details</a>
  </div>
</div>

<!--End Heading Blobk Background-->

<!--courses details block-->
 <div class="row container-fluid">
  <div class="col-md-4 sub " >
    <h2 class="heading3" >Courses Details</h2>
  </div>

  
</div>

<!--End courses details block-->



<!--Courses-->
<?php
    $sql="SELECT p.Name,a.course_id,a.year FROM professor p,assign_course a WHERE p.Email=a.email AND p.Password IS NOT NULL";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()){
  ?>

<div class="course">
  <a class="cardAnchorTag" href="Course_Details.php?id=<?php echo $row['course_id']?>&year=<?php echo $row['year']?>">
    <div class="card" style="color:rgb(117, 141, 218);" >
      <div class="card-body">
        <div class="row">
        <h5 class="card-title col-md-5 " >Program : Bachelor of Technology</h5>
        <h5 class="card-title col-md-5">Course Code : <span class="courseCode"><?php echo $row['course_id'];?></span></h5>
        <h5 class="card-title col-md-2">Batch : <span class="batch"><?php echo $row['year'];?></span></h5>
        </div>
        <p class="card-text">
          <span>Assigned Professor : </span>
          <span class="assProf"><?php echo $row['Name'];?></span>
        </p>
      </div>
      <div class="card-footer">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Update Syllabus</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
    </a>
  </div>
  
 <?php } ?>
  <!--End Courses-->

 



  

          
    
<script src="HOD_courses page.js" charset="utf-8"></script>
</body>
</html>