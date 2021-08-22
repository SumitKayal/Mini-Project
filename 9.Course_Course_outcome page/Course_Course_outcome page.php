<?php

 session_start();
 include ('../config.php');

 if($_SESSION['email']==""){
  header("Location: 1.LogIn/logIn.html");
  exit();

  $email=$_GET['email'];
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
<link rel="stylesheet" href="Course_Course_outcome page.css">

    <title>Course Outcomes</title>
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
      <a href="Course_Course_outcome page.php?id=<?php echo $_GET['id'];?>&year=<?php echo $_GET['year'];?>">Set Course Outcome</a>
      <a href="../10.Course_QuestionPaper\Course_Question_paper.php?id=<?php echo $_GET['id'];?>&year=<?php echo $_GET['year'];?>">Question Paper</a>
      <a href="../11.1.Course_Student_score_page\Course_Student_score_page.php?id=<?php echo $_GET['id'];?>&year=<?php echo $_GET['year'];?>">Student Scores</a>
      <a href="#">Results</a>
      
      <a href="#">Contact</a>
      <a href="../logOut.php">Log Out</a>
    </div>
    <a class="navbar-brand" href="../8.Course start Page\Course start Page.php?id=<?php echo $_GET['id'];?>&year=<?php echo $_GET['year'];?>">
        <img class="UnivLogo " src="Image/univLogo.png" alt="univLogo">
           University of Calcutta</a>
  
  <div class="ml-auto ">
    <img class="Profile_img shadow" src="Image/FM1.jpg" alt="profile-pic">
  </div>
</nav>
<!--End Navbar-->

<!--Heading Block background-->
<div class="headingBlock">
<?php
        $cid=$_GET['id'];
        $sql="SELECT CourseName,credit,fullmarks FROM course WHERE CID='$cid'";
        $result=$conn->query($sql);
        $row1=$result->fetch_assoc();
  
  ?>
<h1 class="headingBlock_h1" style="padding-bottom:0rem;">Course Name : <?php echo $row1['CourseName'];?></h1>
  <h4 class="headingBlock_h1" style="padding-bottom:0rem;">Course Code : <span class="courseCode"><?php echo $_GET['id']; ?></span></h4>
  <h5 class="headingBlock_h1" style="padding-bottom:5rem;">Credit : <?php echo $row1['credit'];?>, Full Marks : <?php echo $row1['fullmarks'];?></h5>
  
  <div class="anchorHeadingBlock">
  <a class="anchorHB" href="Course_Course_outcome page.php?id=<?php echo $_GET['id'];?>&year=<?php echo $_GET['year'];?>">Set Course Outcome</a>
  <a class="anchorHB" href="../10.Course_QuestionPaper\Course_Question_paper.php?id=<?php echo $_GET['id'];?>&year=<?php echo $_GET['year'];?>">Question Paper</a>
  <a class="anchorHB" href="../11.1.Course_Student_score_page\Course_Student_score_page.php?id=<?php echo $_GET['id'];?>&year=<?php echo $_GET['year'];?>">Student Score</a>
  <a class="anchorHB" href="#3">Result</a>
</div>
</div>

<!--End Heading Blobk Background-->

<!--Syllabus heading block-->
 <div class="row container-fluid">
  <div class="col-md-5 sub " >
    <h2 class="heading3" >Set Course Outcomes</h2>
  </div>

  
</div>

<!--End Syllabus heading block-->

<!-- Course Outcome-->
<form action="courseOutcome.php?id=<?php echo $_GET['id'];?>&email=<?php echo $_SESSION['email'];?>&year=<?php echo $_GET['year'];?>" method="POST" >

<div class="profile" id="frm">
  <input type="hidden" id="numCO" name="numCO" value="4"/>
 
    <div class="card" >
      
      <div class="card-body">         
           <div class="row">     
          <div class="col-md-1 col1">
              <h4 class="card-title ">CO1</h4>
          </div>
          <div class="col-md-11 textarea">
             <input type="text" class="form-control" name="COtext1" required="required">
          </div>
        </div>  
      </div>
            
                                                
      
    </div>

    <!---->
    <div class="card" >
      
      <div class="card-body">         
           <div class="row">     
          <div class="col-md-1 col1">
              <h4 class="card-title ">CO2</h4>
          </div>
          <div class="col-md-11 textarea">
             <input type="text" class="form-control" name="COtext2" required="required">
          </div>
        </div>  
      </div>
            
                                                
      
    </div>
 
    

    <div class="card" >
      
      <div class="card-body">         
           <div class="row">     
          <div class="col-md-1 col1">
              <h4 class="card-title ">CO3</h4>
          </div>
          <div class="col-md-11 textarea">
             <input type="text" class="form-control" name="COtext3" required="required">
          </div>
        </div>  
      </div>
            
                                                
      
    </div>



    <div class="card" >
      
      <div class="card-body">         
           <div class="row">     
          <div class="col-md-1 col1">
              <h4 class="card-title ">CO4</h4>
          </div>
          <div class="col-md-11 textarea">
             <input type="text" class="form-control" name="COtext4" required="required">
          </div>
        </div>  
      </div>
            
                                                
      
    </div>


</div>




  <!--End Course Outcome-->



  

  <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="padding: 3rem 9rem;">
    <button class="btn btn-primary me-md-2" type="button" onclick="addco()">ADD+</button>
    <button class="btn btn-primary" type="submit">Submit</button>
  </div>    
</form>    
    
<script src="Course_Course_outcome page.js" charset="utf-8"></script>
</body>
</html>