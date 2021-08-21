<?php
 session_start();
 include ('../config.php');
 if($_SESSION['email']==""){
  header("Location: ../1.LogIn/logIn.html");
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
<link rel="stylesheet" href="Course_Question_paper.css">
<script src="Course_Question_paper.js" charset="utf-8"></script>

    <title>Set Question Paper</title>
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
      <a href="#">Course Outcome</a>
      <a href="#">Question Paper</a>
      <a href="#">Student Scores</a>
      <a href="#">Results</a>
      
      <a href="#">Contact</a>
      <a href="../logOut.php">Log Out</a>
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
  <h1 class="headingBlock_h1">Course Code : <span class="courseCode"><?php echo $_GET['id'];?></span></h1>
  <div class="anchorHeadingBlock">
  <a class="anchorHB" href="../9.Course_Course_outcome page\Course_Course_outcome page.php?id=<?php echo $_GET['id'] ; ?>&year=<?php echo $_GET['year'];?>">Set Course Outcome</a>
  <a class="anchorHB" href="../10.Course_QuestionPaper\Course_Question_paper.php?id=<?php echo $_GET['id'] ; ?>&year=<?php echo $_GET['year'];?>">Question Paper</a>
  <a class="anchorHB" href="#3">Student Score</a>
  <a class="anchorHB" href="#3">Result</a>
</div>
</div>

<!--End Heading Blobk Background-->

<!--Syllabus heading block-->
 <div class="row container-fluid">
  <div class="col-md-5 sub " >
    <h2 class="heading3" >Question Paper</h2>
    <p id="massage" style="padding-left: 5rem;color:red;"></p>
  </div>

  
</div>

<!--End Syllabus heading block-->

<!-- Course Outcome-->

<form action="questionbackend.php?id=<?php echo $_GET['id'];?>&year=<?php echo $_GET['year'];?>" method="POST">

<div class="profile" id="frm">

  <input type="hidden" name="numQ" value="1" id="numQ"/>

  <div class="card mb-3" >
  
    
    
      <div class="card-body">
        
          <div class=" row">


              <div class="col-md-1 col1">
            
                <label for="courseCode" class="form-label"><h4>1</h4></label>

              </div>

              <div class="col-md-2 textarea">

                <input type="text" class="form-control" name="courseCode1" pattern="^[C][O][1-9]$" placeholder="CO code" >

              </div>

             <div class="col-md-7 textarea">

               <input type="text"  class="form-control" name="q1" pattern=".+" placeholder="write question here.." >

             </div>

            <div class="col-md-2 textarea">

                <input type="text"  class="form-control" name="fm1" pattern="[1-5]" placeholder="full marks" >

            </div>



          </div>
        
     
         
      </div>
                                            


  </div>


</div>


  








<!--End Course Outcome-->



  

<div class=" d-grid gap-2 d-md-flex justify-content-md-end" style="padding: 3rem 9rem;">
  <button class="btn btn-primary" type="button" onclick="addQ()">+ADD</button>
  <button class="btn btn-primary" type="submit">Submit</button>
</div>    
</form>    


    

</body>
</html>