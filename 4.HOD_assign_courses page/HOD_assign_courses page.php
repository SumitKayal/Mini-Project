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
<link rel="stylesheet" href="HOD_assign_courses page.css">

    <title>Assign Courses</title>
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
    <a class="navbar-brand" href="D:\Mini Project\3.HOD home page\HODhome.html">
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
    
</div>

<!--End Heading Blobk Background-->

<!--Registration Request block-->
 <div class="row container-fluid">
  <div class="col-md-5 sub " >
    <h2 class="heading3" >Assign Courses</h2>
  </div>
   <div class="col-md-3 ml-auto sub" style="padding-top: 1rem;">
       
   </div>
  
</div>

<!--End registration request block-->

<!--Assign Courses-->

<div class="profile">
    <form action="assignCourse.php" method="POST">
  <div class="card mb-3" >
    <div class="row g-0">
    
    <div class="col-md-12">
      <div class="card-body">
        
         



          <div class="m-3 row">
            <div class="col-md-4 col1">
            
          <label for="courseCode" class="form-label"><h4>Course Name</h4></label>
          </div>
          <div class="col-md-8">
          <select class="select form-control-sm" id="c1" name="course1">
            <option value="selcourse">Select Course</option>
                            <?php
                              $sql="SELECT CID,CourseName FROM Course";
                              $result=$conn->query($sql);
                              while($row=$result->fetch_assoc()){?>
                                <option value="<?php
                                   echo $row['CID'];
                                ?>"><?php echo $row['CourseName'];?></option>
                              <?php

                            }?>
                            
                            
                        </select>

                        <select class="select form-control-sm" id="c1" name="course2">
                        <option value="selcourse">Select Course</option>
                            <?php
                              $sql="SELECT CID,CourseName FROM Course";
                              $result=$conn->query($sql);
                              while($row=$result->fetch_assoc()){?>
                                <option value="<?php
                                   echo $row['CID'];
                                ?>"><?php echo $row['CourseName'];?></option>
                              <?php

                            }?>
                            
                            
                        </select>


                        <select class="select form-control-sm" id="c1" name="course3">
                        <option value="selcourse">Select Course</option>
                            <?php
                              $sql="SELECT CID,CourseName FROM Course";
                              $result=$conn->query($sql);
                              while($row=$result->fetch_assoc()){?>
                                <option value="<?php
                                   echo $row['CID'];
                                ?>"><?php echo $row['CourseName'];?></option>
                              <?php

                            }?>
                            
                            
                        </select>
          </div>
          
          </div>



          <div class="m-3 row">
            <div class="col-md-4 col1">
            
          <label for="courseCode" class="form-label"><h4>Ass. Prof. Name</h4></label>
          </div>
          <div class="col-md-7">
          <?php $id=$_GET['id'];
                     $sql="SELECT Name FROM professor WHERE Email='$id'";
                     $result=$conn->query($sql);
                     
                      
                    ?>
          <input type="hidden" id="email" name="email" value="<?php echo $_GET['id']; ?>" />
          <input type="text" class="form-control form-control-md" value="<?php  echo  $result->fetch_assoc()['Name']; ?>"disabled>
            
        </div>
          
          </div>

          <div class="d-grid ">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>

          
    </div>
      </div>
         
       
    </div>
                                            
  </div>
</div>
</form>
  

</div>


<!--End Assigne Courses-->


  

          
    
<script src="HOD_assign_courses page.js" charset="utf-8"></script>
</body>
</html>