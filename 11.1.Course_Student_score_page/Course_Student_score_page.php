<?php
 session_start();
 include ('../config.php');
 if($_SESSION['email']==""){
  header("Location: ../1.LogIn/logIn.html");
  exit();
}
$email=$_GET['email'];

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
<link rel="stylesheet" href="Course_Student_score_page.css">

    <title>Student Score</title>
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
      <a href="D:\Mini Project\9.Course_Course_outcome page\Course_Course_outcome page.html">Course Outcome</a>
      <a href="#">Question Paper</a>
      <a href="#">Student Scores</a>
      <a href="#">Results</a>
      
      <a href="#">Contact</a>
      <a href="#">Log Out</a>
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
  <h1 class="headingBlock_h1">Course Code : <span class="courseCode">
  <span class="courseCode"><?php echo $_GET['id']; ?>
  </span></h1>
  <div class="anchorHeadingBlock">
  
</div>
</div>

<!--End Heading Blobk Background-->

<!--Syllabus heading block-->
 <div class="row container-fluid">
  <div class="col-md-4 sub " >
    
  </div>

  
</div>

<!--End Syllabus heading block-->

<!--Syllabus-->
<div class="syllabus">
  <form action="studentCourseBcakend.php" method="POST" >
  <div class="card">
    <div class="card-head" style="padding: 2rem;">
      <label for="">Examination Roll:</label>
      <select class="select form-control-sm" id="exroll" name="exroll">
        <?php
            $cid=$_GET['id'];
            $sql="SELECT s.exmroll,CID FROM stu_info s, course c WHERE s.ssem=c.sem AND c.CID='$cid' AND s.exmroll NOT IN(SELECT DISTINCT sm.exroll FROM stu_marks sm WHERE sm.qid IN(SELECT qid FROM question q WHERE q.oid IN(SELECT oid FROM course_outcome co,course c WHERE c.CID=co.cid AND c.CID='$cid')))";
            $result=$conn->query($sql);
            while($row=$result->fetch_assoc()){?>
                <option value="<?php
                 echo $row['exmroll'];
                  ?>"><?php echo $row['exmroll'];?></option>
                  <?php

         }?>
                            
                            
      </select>
      

      
    </div>
    <div class="card-body" style="text-align: center;">
    <?php
    $year=$_GET['year'];
      $sql="SELECT qid,qnum,fullmarks ,q.oid, year, cid FROM question q,course_outcome co WHERE q.oid=co.oid AND co.cid='$cid' AND co.year='$year' ORDER BY q.qnum";
      $result=$conn->query($sql);
    
      while($row=$result->fetch_assoc()){ 
        
    ?>
        <input type="hidden" name="course_id" id="course_id" value="<?php echo $cid?>">
        <input type="hidden" name="year" id="year" value="<?php echo $year?>">
        
          <label for=""><h4><?php echo $row['qnum'].". " ; ?>   </h4>   </label>
          <input type="number" 
                  name="<?php echo $row['qid']; ?>" 
                  id="<?php echo $row['qid']; ?>" 
                  step="0.1"
                  max=<?php echo $row['fullmarks'];?>
                  min=0
                  style="width:30%;"
                  placeholder=" full marks :<?php echo $row['fullmarks'];?>"/>
          
      
        

    <?php } ?>
        <br>
        <input class="btn btn-outline-info" style="margin-top:1rem;" type="submit">
      </form>
      </form>
    </div>
  </div>
</div>


<!--End Syllabus-->


  

          
    
<script src="Course_Student_score_page.js" charset="utf-8"></script>
</body>
</html>