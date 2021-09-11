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
<body >
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
      <a href="logOut.php">Log Out</a>
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
<div class="headingBlock" style="margin-top:5rem;">
<?php
        $cid=$_GET['id'];
        $sql="SELECT CourseName,credit,fullmarks FROM course WHERE CID='$cid'";
        $result=$conn->query($sql);
        $row1=$result->fetch_assoc();
  
  ?>
<h1 class="headingBlock_h1" style="padding-bottom:0rem;">Course Name : <?php echo $row1['CourseName'];?></h1>
  <h4 class="headingBlock_h1" style="padding-bottom:0rem;">Course Code : <span class="courseCode"><?php echo $_GET['id']; ?></span></h4>
  <h5 class="headingBlock_h1" style="padding-bottom:4rem;">Credit : <?php echo $row1['credit'];?>, Full Marks : <?php echo $row1['fullmarks'];?></h5>
  
  <div class="anchorHeadingBlock">
  
</div>
</div>

<!--End Heading Blobk Background-->

<!--Syllabus heading block-->
 <div class="row container-fluid" style="padding:0 7rem;margin:1rem 0rem;">
  <nav class="navbar navbar-light bg-light" style="border-radius:1rem;">
   <h5 style="color:brown">Please select for which examination marks you want to put</h5>
   <button type="button" class="btn btn-outline-info btn-sm" id="esbutton" onclick="showES()" >End Sem Exam</button>
   <button type="button" class="btn btn-outline-info btn-sm" id="iabutton" onclick="showIA()">Internal Assesment</button>
   
    
   </nav>
  
  

  
</div> 

<!--End Syllabus heading block-->


<!--student score-->
<div class="syllabus" id="es" hidden>
  <form  method="POST" >
    <div class="card">
      <div class="card-head" style="padding: 2rem;">
        <div class="row">
          <div style="text-align:center;">
            <h1>End Semester Examination Marks</h1>
          </div>
          <div class="col-md-4">

          </div>
          <div class="col-md-4">
            <label for="">Examination Roll:</label>
            <select class="select form-control-sm" id="exroll1" name="exroll">
            <?php
            $cid=$_GET['id'];
            $year=$_GET['year'];
            $sql="SELECT s.exmroll,CID FROM stu_info s, course c WHERE s.ssem=c.sem AND c.CID='$cid' AND s.exmroll NOT IN(SELECT DISTINCT sm.exroll FROM stu_marks sm WHERE sm.qid IN(SELECT qid FROM question q WHERE q.oid IN(SELECT oid FROM course_outcome co,course c WHERE c.CID=co.cid AND c.CID='$cid' AND co.year='$year' )))";
            $result=$conn->query($sql);
            while($row=$result->fetch_assoc()){?>
              <option value="<?php echo $row['exmroll'];?>">
                <?php echo $row['exmroll'];?>
              </option>
            <?php
              }?>        
            </select>
          </div>
          <div class="col-md-4">

          </div>
        </div>
      </div>

      <div class="card-body" style="text-align: center;">
          <input type="hidden" name="course_id" id="course_id" value="<?php echo $cid?>">
          <input type="hidden" name="year" id="year" value="<?php echo $year?>">
        <?php
        $year=$_GET['year'];
        $sql="SELECT qid,qnum,fullmarks ,q.oid, year, cid FROM question q,course_outcome co WHERE q.oid=co.oid AND co.cid='$cid' AND co.year='$year' ORDER BY q.qnum";
        $result=$conn->query($sql);
        $count=0;
        while($row=$result->fetch_assoc()){ 
        $count++;
        ?>
          <label for=""><h4><?php echo $row['qnum'].". " ; ?>   </h4>   </label>
          <input type="number" 
          name="<?php echo $row['qid']; ?>" 
          id="<?php echo $row['qid']; ?>" 
          step="0.1"
          max=<?php echo $row['fullmarks'];?>
          min=0
          style="width:30%;"
          placeholder=" full marks :<?php echo $row['fullmarks'];?>" required>

        <?php 
        if($count%2==0){?>
          <br>
        <?php }
        } ?>
        <br>
        <input type="hidden" name="examtype" id="examtype" value="es">
        <div class="d-grid gap-2 col-4 mx-auto">
          <input class="btn btn-outline-danger" style="margin-top:1rem;" type="submit">
        </div>
        </div>
    </div>
  </form>
</div>


<!--End Student score-->


<!---->
<div class="syllabus" id="ia" hidden>
  <form  method="POST"   id="secondForm">
    <div class="card">
      <div class="card-head" style="padding: 2rem;">
        <div class="row">
          <div style="text-align:center;">
            <h1>Internal assessment Marks</h1>
          </div>
          <div class="col-md-4">

          </div>
          
          <div class="col-md-4" style="text-align:center;">
            <label for="">Examination Roll:</label>
            
            <select class="select form-control-sm" id="exroll2" name="exroll">
            <?php
            $sql="SELECT s.exmroll,CID FROM stu_info s, course c WHERE s.ssem=c.sem AND c.CID='$cid' AND s.exmroll NOT IN(SELECT DISTINCT smm.exroll FROM stu_midmarks smm WHERE smm.qid IN(SELECT mq.qid FROM mid_question mq WHERE mq.oid IN(SELECT oid FROM course_outcome co,course c WHERE c.CID=co.cid AND c.CID='$cid' AND co.year='$year' )))";
            $result=$conn->query($sql);
            while($row=$result->fetch_assoc()){?>
              <option value="<?php echo $row['exmroll'];?>">
                <?php echo $row['exmroll'];?>
              </option>
            <?php
              }?>        
            </select>
            <!--massage--><label  ><p id="massage" style="color:#36a4ff"> </p></label>
          </div>
          <div class="col-md-4">

          </div>
        </div>
      </div>
 
      <div class="card-body" style="text-align: center;">
          <input type="hidden" name="course_id" id="course_id" value="<?php echo $cid?>">
          <input type="hidden" name="year" id="year" value="<?php echo $year?>">
          
          <?php
          
          $sql1="SELECT qid,qnum,fullmarks ,mq.oid, year, cid FROM mid_question mq,course_outcome co WHERE mq.oid=co.oid AND co.cid='$cid' AND co.year='$year' ORDER BY mq.qnum";
          $result1=$conn->query($sql1);
          $count=0;
          while($row1=$result1->fetch_assoc()){ 
          $count++;
          ?>
            <label for=""><h4><?php echo $row1['qnum'].". " ; ?>   </h4>   </label>
            <input type="number" 
            name="<?php echo $row1['qid']; ?>" 
            id="<?php echo $row1['qid']; ?>" 
            step="0.1"
            max=<?php echo $row1['fullmarks'];?>
            min=0
            style="width:30%;"
            placeholder=" full marks :<?php echo $row1['fullmarks'];?>"/>

          <?php 
          if($count%2==0){?>
            <br>
          <?php }
          } ?>
          
        <br>
        <input type="hidden" name="examtype" id="examtype" value="ia">
        <div class="d-grid gap-2 col-4 mx-auto">
          <button class="btn btn-outline-danger" type="submit" style="margin-top:1rem;" >Submit</button>
        </div>
        
      </div>

      
      
    </div>
  </form>
</div>
<!---->


  

 <script>
   window.addEventListener("load",function(){
     function insertData(){
       let XHR = new XMLHttpRequest();
       const fd=new FormData(form2);
       XHR.onload=function(){
        var massage=document.getElementById("massage");
        massage.innerHTML="Marks successfully inserted";
        setTimeout(function(){ 
                              selectOption();
                              form2.reset();
                              massage.innerHTML=""; }, 2000);
        
      };
       XHR.open("POST","studentCourseBcakend.php",true);
       XHR.send(fd);
      }
      const form2=document.getElementById("secondForm");
      form2.addEventListener("submit",function(event){
        event.preventDefault();
        insertData();
      })
      
       function selectOption(){
        
        var list=document.getElementById("exroll2");
        var i=0;
        
     
        while(list.childNodes[i++].value!=list.value);
          list.removeChild(list.childNodes[--i]);
        
      }
   })

  
   
</script>         
    
<script src="Course_Student_score_page.js" charset="utf-8"></script>
</body>
</html>