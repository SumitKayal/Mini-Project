<?php

 session_start();
 include ('../config.php');

 if($_SESSION['email']==""){
  header("Location: 1.LogIn/logIn.html");
  exit();
}
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
  <!--Font Awasome-->
  <script src="https://kit.fontawesome.com/098bd1883a.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="HOD_registration_request page.css">

    <title>RegistrationRequest</title>
</head>
<body>
   <!--Navbar-->
  <nav class="shadow p-3 mb-5 bg-body rounded navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="background-color: black;">
    
    <div id="main ">
      <button class="openbtn" onclick="openNav()">☰ </button>  
      
      
    </div> 
    <div id="mySidebar" class="sidebar  ">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a href="D:\Mini Project\3.HOD home page\HODhome.html">Home</a>
      <a href="#">Notification</a>
      <a href="D:\Mini Project\5.HOD_registration_request page\HOD_registration_request page.html">Registration Request</a>
      <a href="D:\Mini Project\4.HOD_assign_courses page\HOD_assign_courses page.html">Assign Courses</a>
      <a href="D:\Mini Project\6.HOD_courses page\HOD_courses page.html">Courses</a>
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
    <a class="anchorHB" href="HOD_registration_request page.php">Registration Request</a>
    <a class="anchorHB" href="../4.1.HOD_assign_courses page\HOD_assign_courses page.php">Assign Courses</a>
    <a class="anchorHB" href="../6.HOD_courses page\HOD_courses page.php">Courses Details</a>
  </div>
</div>

<!--End Heading Blobk Background-->

<!--Registration Request block-->
 <div class="row container-fluid">
  <div class="col-md-4 sub " >
    <h2 class="heading3" >Registration Request</h2>
  </div>

  
</div>

<!--End registration request block-->

<!--Profile-->
<?php
    $sql="SELECT p.Email,p.Name,p.dob,p.Type,p.Gender,t.course1,t.course2,t.course3 FROM temporay_prf_course t, professor p
    WHERE p.Email=t.email ORDER BY p.rag_time ";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()){

    
?>
<div class="profile">

  <div class="card mb-3" >
  <div class="row g-0">
    
    <div class="col-md-10">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['Name'];?></h5>
        
      
     
      
      <p class="card-text">
        <span>Date of Birth : </span>
        <span class="DOF" style=" margin-right: 1%;"><?php echo $row['dob'];?></span>
        <span>Gender : </span>
        <span class="gender" style=" margin-right: 1%;"><?php echo $row['Gender'];?></span>
        <span>Email : </span>
        <span class="email" style=" margin-right: 1%;"><?php echo $row['Email'];?></span>
      </p>
      <p class="card-text">
        <span>Course 1 : </span>
        <span class="courses" style=" margin-right: 1%;"><?php
            $course=$row['course1'];
            $sql1="SELECT CourseName FROM course WHERE CID='$course'";
            $result1=$conn->query($sql1);
            while($row1=$result1->fetch_assoc()){
              echo $row1['CourseName'];
            }
        ?></span>
        <span>Course 2 : </span>
        <span class="courses" style=" margin-right: 1%;"><?php
            $course=$row['course1'];
            $sql1="SELECT CourseName FROM course WHERE CID='$course'";
            $result1=$conn->query($sql1);
            while($row1=$result1->fetch_assoc()){
              echo $row1['CourseName'];
            }
        ?></span>
        <span>Course 3 : </span>
        <span class="courses" style=" margin-right: 1%;"><?php
            $course=$row['course1'];
            $sql1="SELECT CourseName FROM course WHERE CID='$course'";
            $result1=$conn->query($sql1);
            while($row1=$result1->fetch_assoc()){
              echo $row1['CourseName'];
            }
        ?></span>
        <a  href="#" class="btn btn-primary">Download CV</a>
      </p>
    </div>
      </div>
         <div class="col-md-1">
           <a href="accept.php?id=<?php echo $row['Email']; ?>">
          <i class="fas fa-check fa-3x fontAw right "></i>
        </a>
    </div>
        <div class="col-md-1">
          <a href="reject.php?id=<?php echo $row['Email']; ?>">
          <i class="fas fa-times fa-3x fontAw cross"></i>  
        </a>                                                     
    </div>
    </div>
                                            
  </div>
</div>
  

</div>

<?php } ?>
<!--End Profile-->



          
    
<script src="HOD_registration_request page.js" charset="utf-8"></script>
</body>
</html>