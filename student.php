<?php
 session_start();
 include ('config.php');
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
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  


<title>Student</title>
</head>
<body style="background-color:#fcd9bb">

<div class="card shadow-sm " style="margin:1rem 3rem; border-radius:2rem;">
  
  <div class="card-body">
      <div class="row">
      <div class="col-md-4" style="padding-left:7rem;">
            <img style="width:9rem;" src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f0/University_of_Calcutta_logo.svg/800px-University_of_Calcutta_logo.svg.png" alt="univ logo">
           </div>
          <div class="col-md-8" style="padding:1rem 2rem;">
          <!-- welcomw block-->
          <?php
            $email=$_SESSION['email'];

            $sql="SELECT sname FROM stu_info WHERE exmroll='$email'";
            $result=$conn->query($sql);
            $row=$result->fetch_assoc()['sname'];
          ?>
          <!---->
            <h1 class="card-title">Welcome  <?php echo $row;?></h1> 
            <h3 class="card-title">Please Give Your Vluable Feedback on Course Outcomes.</h3>
            
            <p class="card-text">Your feedback is very important for us.</p>
           </div>
          
    
      </div>
    
  </div>
</div>

<!-- from start here-->
    <form action="studentbackend.php" method="POST" >
    
    
    <?php
        $currentyear = date("Y");
        $sql1="SELECT c.CID,c.CourseName FROM stu_info sf,course c WHERE c.sem=sf.ssem AND sf.exmroll='$email'";
        $result1=$conn->query($sql1);
        while($row1=$result1->fetch_assoc()){
            $courseid=$row1['CID'];
        
    
    ?>
    <div style="margin:2rem 4rem;background-color:white;padding:1rem 2rem;">
        <h1 style="padding-bottom:2rem;"><?php echo $row1['CourseName'];?></h1>
    
    <?php
        $sql2="SELECT outcome,oid FROM course_outcome WHERE cid='$courseid' AND year='$currentyear'";
        $result2=$conn->query($sql2);
        while($row2=$result2->fetch_assoc()){
            $oid=$row2['oid'];

    ?>

    
    <div class="row">
        <div class="col-md-11">
            <h5><?php echo $row2['outcome'];?></h5>
        </div>
        <div class="col-md-1">
            
            <input class="form-control" type="number" name="<?php echo $oid?>" id="<?php echo $oid?>" min=1 max=5 placeholder="#" required>
        </div>
    </div>
    <hr>

    <?php } ?>

    </div>

    <?php } ?>

    <div class="d-grid gap-2 col-6 mx-auto" style="padding-top:3rem; padding-bottom:3rem;">
        <button class="btn btn-info" >Submit</button>
        
    </div>
    </form>

    <!-- form end here-->
    
</body>
</html>