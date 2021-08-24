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
<?php
  $cid=$_GET['id'];
    $sql1="SELECT CourseName FROM course WHERE CID='$cid'";
    $result=$conn->query($sql1);
    $row=$result->fetch_assoc();
  ?>
<div class="headingBlock">
  <h1 style="padding-top:1rem;padding-left:2rem;">Course Name : <?php echo $row['CourseName'];?></h1>
  <h2 class="headingBlock_h1" style="padding-bottom:5rem;">Course Code : <span class="courseCode"><?php echo $_GET['id']; ?></span></h2>
  <a class="headingBlock_h1" style="padding-bottom:5rem;color:blue;" href="../8.Course start Page\test.php?id=<?php echo $_GET['id'];?>&year=<?php echo $_GET['year'];?>">
  Course Outcome Assesment</a>
</div>

<!--End Heading Blobk Background-->

<!--Syllabus heading block-->
 <div class="row container-fluid">
  <div class="col-md-4 sub " >
    <h2 class="heading3" >Syllabus</h2>
  </div>

  
</div>

<!--End Syllabus heading block-->

<!--Syllabus-->
<div class="syllabus" style="margin:1rem 6rem;">
  <div class="card">
    <div class="card-body">
        <span> <?php
        $cid=$_GET['id'];
        $sql="SELECT syllabus FROM course WHERE CID='$cid'";
        $result=$conn->query($sql);
        echo $result->fetch_assoc()['syllabus'];
        ?>
        </span>
    </div>
  </div>
</div>


<!--End Syllabus-->



<div class="row container-fluid">
  <div class="col-md-7 sub " >
    <h2 class="heading3" >Course Outcomes</h2>
  </div>

  
</div>
<!--Outcomes-->
<div class="syllabus" style="margin:1rem 6rem;">
  <div class="card">
    <div class="card-body">
     <span> <?php
        $cid=$_GET['id'];
        $year=$_GET['year'];
        $sql="SELECT outcomeName,outcome FROM course_outcome WHERE cid='$cid' AND year='$year'";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){?>
          <h4><?php echo $row['outcomeName'];?></h4>
          
          <p><?php echo $row['outcome']; ?></p>
          <hr>
       <?php }?>
      </span>
    </div>
  </div>
</div>

<!--End Outcome-->
<div class="row container-fluid">
  <div class="col-md-7 sub " >
    <h2 class="heading3" >Question Paper</h2>
  </div>

  
</div>

<!--Question Paper-->
<div class="syllabus" style="margin:1rem 6rem;">
  <div class="card">
    <div class="card-body">
     <span> <?php
        $cid=$_GET['id'];
        $year=$_GET['year'];
        $sql="SELECT q.qnum,q.qtext,q.fullmarks FROM question q,course_outcome c WHERE c.cid='$cid' AND c.year='$year' AND c.oid=q.oid";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){?>
          <h4><?php echo $row['qnum'];?>.</h4>
          
          <p><?php echo $row['qtext']; ?>     <i><b><?php echo $row['fullmarks']; ?></b></i></p>
          <hr>
       <?php }?>
      </span>
    </div>
  </div>
</div>    

<!--End Question Paper-->





  
<div style="text-align:center;">
    <a href="HOD_courses page.php" ><button class="btn btn-light"><-Back</button></a>
</div>
     
    
<script src="Course start Page.js" charset="utf-8"></script>
</body>
</html>