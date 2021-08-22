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
    <p id="massage" style="padding-left: 5rem;color:red;color:red;"></p>
  </div>

  
</div>

<!--End Syllabus heading block-->

<!-- Course Outcome-->

<form action="questionbackend.php?id=<?php echo $_GET['id'];?>&year=<?php echo $_GET['year'];?>" method="POST" >

<div class="profile" id="frm" >
  <h1 style="background-color:#8ca7d1"><b style="padding:1rem;">1.</b></h1>

  <input type="hidden" name="numQ1" value="1" id="numQ1"/>

  <div class="card mb-3" >
  
    
    
      <div class="card-body">
        
          <div class=" row">


              <div class="col-md-1 col1">
            
                <label for="courseCode" class="form-label"><h4>1</h4></label>

              </div>

              <div class="col-md-11 textarea">

              <select class="select form-select form-select-sm" id="co" name="courseCode11" required="required">
            <option value="">Select Course Outcome</option>
                            <?php
                            $cid=$_GET['id'];
                            $year=$_GET['year'];
                              $sql="SELECT oid,outcome FROM course_outcome WHERE cid='$cid' AND year='$year'";
                              $result=$conn->query($sql);
                              while($row=$result->fetch_assoc()){?>
                                <option value="<?php
                                   echo $row['oid'];
                                ?>"><?php echo $row['outcome'];?></option>
                              <?php

                            }?>
                            
                            
                        </select>
    

              </div>

             <div class="col-md-10 textarea">

               <input type="text"  class="form-control" name="q11" required="required" placeholder="write question here.." >

             </div>

            <div class="col-md-2 textarea">

                <input type="text"  class="form-control" name="fm11" id="fm1" pattern="[1-2]" placeholder="full marks" >

            </div>



          </div>
        
     
         
      </div>
                                            


  </div>


</div>

<div class=" d-grid gap-2 d-md-flex justify-content-md-end" style="padding: 2rem 10rem;">
  <button class="btn btn-primary" type="button" onclick="addQ()">+ADD</button>
  
</div> 


<!---->
<div class="profile" id="frm2" >
  <h1 style="background-color:#8ca7d1"><b style="padding:1rem;">2.</b></h1>

  <input type="hidden" name="numQ2" value="1" id="numQ2"/>

  <div class="card mb-3" >
  
    
    
      <div class="card-body">
        
          <div class=" row">


              <div class="col-md-1 col1">
            
                <label for="courseCode" class="form-label"><h4>1</h4></label>

              </div>

              <div class="col-md-11 textarea">

              <select class="select form-select form-select-sm" id="co2" name="courseCode21" required="required">
            <option value="">Select Course Outcome</option>
                            <?php
                            $cid=$_GET['id'];
                            $year=$_GET['year'];
                              $sql="SELECT oid,outcome FROM course_outcome WHERE cid='$cid' AND year='$year'";
                              $result=$conn->query($sql);
                              while($row=$result->fetch_assoc()){?>
                                <option value="<?php
                                   echo $row['oid'];
                                ?>"><?php echo $row['outcome'];?></option>
                              <?php

                            }?>
                            
                            
                        </select>

              </div>

             <div class="col-md-10 textarea">

               <input type="text"  class="form-control" name="q21" required="required" placeholder="write question here.." >

             </div>

            <div class="col-md-2 textarea">

                <input type="text"  class="form-control" name="fm21" id="fm21" pattern="[1-5]" placeholder="full marks" >

            </div>



          </div>
        
     
         
      </div>
                                            


  </div>


</div>

<div class=" d-grid gap-2 d-md-flex justify-content-md-end" style="padding: 2rem 10rem;">
  <button class="btn btn-primary" type="button" onclick="addQsec()">+ADD</button>
  
</div> 


<!---->

<div class="profile" id="frm3" >
  <h1 style="background-color:#8ca7d1"><b style="padding:1rem;">3.</b></h1>

  <input type="hidden" name="numQ3" value="1" id="numQ3"/>

  <div class="card mb-3" >
  
    
    
      <div class="card-body">
        
          <div class=" row">


              <div class="col-md-1 col1">
            
                <label for="courseCode" class="form-label"><h4>1</h4></label>

              </div>

              <div class="col-md-11 textarea">

              <select class="select form-select form-select-sm" id="co3" name="courseCode31" required="required">
            <option value="">Select Course Outcome</option>
                            <?php
                            $cid=$_GET['id'];
                            $year=$_GET['year'];
                              $sql="SELECT oid,outcome FROM course_outcome WHERE cid='$cid' AND year='$year'";
                              $result=$conn->query($sql);
                              while($row=$result->fetch_assoc()){?>
                                <option value="<?php
                                   echo $row['oid'];
                                ?>"><?php echo $row['outcome'];?></option>
                              <?php

                            }?>
                            
                            
                        </select>

              </div>

             <div class="col-md-10 textarea">

               <input type="text"  class="form-control" name="q31" required="required" placeholder="write question here.." >

             </div>

            <div class="col-md-2 textarea">

                <input type="text"  class="form-control" name="fm31" id="fm31" pattern="[0-9]|10" placeholder="full marks" >

            </div>



          </div>
        
     
         
      </div>
                                            


  </div>


</div>

<div class=" d-grid gap-2 d-md-flex justify-content-md-end" style="padding: 2rem 10rem;">
  <button class="btn btn-primary" type="button" onclick="addQth()">+ADD</button>
  
</div> 

<!--End Course Outcome-->


   







<div class=" d-grid gap-2 d-md-flex justify-content-md-end" style="padding: 3rem 10rem;">
  <button class="btn btn-primary" type="submit">Submit</button>
</div>  

</form>    


    
<!-- JAVAScript-->
<script>

/*Navbar Functions*/
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "0px";
  }
  
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }

/*End Navbar Function*/






/* add questions*/


function addQ(){

  var i=parseInt(document.getElementById("numQ1").value)+1;
  document.getElementById("numQ1").value=i;
  
  $cocode="courseCode1"+i;
  $qNumber="q1"+i;
  $fm="fm1"+i;

  var p=document.getElementById("frm");
  var card=document.createElement("div");
  card.setAttribute("class","card mb-3");
  
  

  var cardBody=document.createElement("div");
  cardBody.setAttribute("class","card-body");

  var row=document.createElement("div");
  row.setAttribute("class","row");

  var div1=document.createElement("div");
  div1.setAttribute("class","col-md-1 col1");

  var lbl=document.createElement("label");
  lbl.setAttribute("class","form-label");

  var h=document.createElement("h4");
  h.innerHTML=i;

  var div2=document.createElement("div");
  div2.setAttribute("class","col-md-11 textarea");

//
 var sel=document.createElement("select");
 sel.setAttribute("class","select form-select form-select-sm");
 sel.setAttribute("id","co");
 sel.setAttribute("name",$cocode);
 sel.setAttribute("required","required");

var opt=document.createElement("option");
opt.setAttribute("value","");
opt.innerHTML="Select Course Outcome";


sel.appendChild(opt);

const optv=[];

  var count=-1;         
                            <?php
                            $cid=$_GET['id'];
                            $year=$_GET['year'];
                              $sql="SELECT oid,outcome FROM course_outcome WHERE cid='$cid' AND year='$year'";
                              $result=$conn->query($sql);
                              while($row=$result->fetch_assoc()){?>
                                count++;
                                optv[count]=document.createElement("option");
                                optv[count].setAttribute("value","<?php echo $row['oid'];?>");
                                optv[count].innerHTML="<?php echo $row['outcome'];?>";
                                sel.appendChild(optv[count]);
                              <?php

                            }?>
                            
                            
                       


  var div3=document.createElement("div");
  div3.setAttribute("class","col-md-10 textarea");

  var in3=document.createElement("input");
  in3.setAttribute("class","form-control");
  in3.setAttribute("name",$qNumber);
  in3.setAttribute("placeholder","write question here..");
  in3.setAttribute("required","required");

  var div4=document.createElement("div");
  div4.setAttribute("class","col-md-2 textarea");

  var in4=document.createElement("input");
  in4.setAttribute("class","form-control");
  in4.setAttribute("name",$fm);
  in4.setAttribute("placeholder","full marks");
  in4.setAttribute("pattern","[1-2]");

  card.appendChild(cardBody);
  cardBody.appendChild(row);
  row.appendChild(div1);
    div1.appendChild(lbl);
     lbl.appendChild(h);
  row.appendChild(div2);
    
    div2.appendChild(sel);

  row.appendChild(div3);
    div3.appendChild(in3);
  row.appendChild(div4);
    div4.appendChild(in4);
  


  
  p.appendChild(card);
  
 
}



function addQsec(){

  var j=parseInt(document.getElementById("numQ2").value)+1;
  document.getElementById("numQ2").value=j;
  
  $cocode="courseCode2"+j;
  $qNumber="q2"+j;
  $fm="fm2"+j;
  
  var p1=document.getElementById("frm2");
  
  var card=document.createElement("div");
  card.setAttribute("class","card mb-3");
  
 var cardBody=document.createElement("div");
  cardBody.setAttribute("class","card-body");
  
  var row=document.createElement("div");
  row.setAttribute("class","row");

  var div1=document.createElement("div");
  div1.setAttribute("class","col-md-1 col1");

  var lbl=document.createElement("label");
  lbl.setAttribute("class","form-label");

  var h=document.createElement("h4");
  h.innerHTML=j;

  var div2=document.createElement("div");
  div2.setAttribute("class","col-md-11 textarea");

  

  //
  var sel=document.createElement("select");
 sel.setAttribute("class","select form-select form-select-sm");
 sel.setAttribute("id","co");
 sel.setAttribute("name",$cocode);
 sel.setAttribute("required","required");

var opt=document.createElement("option");
opt.setAttribute("value","");
opt.innerHTML="Select Course Outcome";


sel.appendChild(opt);

const optv=[];

  var count=-1;         
                            <?php
                            $cid=$_GET['id'];
                            $year=$_GET['year'];
                              $sql="SELECT oid,outcome FROM course_outcome WHERE cid='$cid' AND year='$year'";
                              $result=$conn->query($sql);
                              while($row=$result->fetch_assoc()){?>
                                count++;
                                optv[count]=document.createElement("option");
                                optv[count].setAttribute("value","<?php echo $row['oid'];?>");
                                optv[count].innerHTML="<?php echo $row['outcome'];?>";
                                sel.appendChild(optv[count]);
                              <?php

                            }?>

  var div3=document.createElement("div");
  div3.setAttribute("class","col-md-10 textarea");

  var in3=document.createElement("input");
  in3.setAttribute("class","form-control");
  in3.setAttribute("name",$qNumber);
  in3.setAttribute("placeholder","write question here..");
  in3.setAttribute("required","required");

  var div4=document.createElement("div");
  div4.setAttribute("class","col-md-2 textarea");

  var in4=document.createElement("input");
  in4.setAttribute("class","form-control");
  in4.setAttribute("name",$fm);
  in4.setAttribute("placeholder","full marks");
  in4.setAttribute("pattern","[1-5]");

  console.log("hi five");

  div4.appendChild(in4);
  div3.appendChild(in3);
  div2.appendChild(sel);
  lbl.appendChild(h);
  div1.appendChild(lbl);
  row.appendChild(div1);
  row.appendChild(div2);
  row.appendChild(div3);
  row.appendChild(div4);
  cardBody.appendChild(row);
  card.appendChild(cardBody);
  p1.appendChild(card);

  

  
  
  
 
}


function addQth(){

  var j=parseInt(document.getElementById("numQ3").value)+1;
  document.getElementById("numQ3").value=j;
  
  $cocode="courseCode3"+j;
  $qNumber="q3"+j;
  $fm="fm3"+j;
  
  var p1=document.getElementById("frm3");
  
  var card=document.createElement("div");
  card.setAttribute("class","card mb-3");
  
 var cardBody=document.createElement("div");
  cardBody.setAttribute("class","card-body");
  
  var row=document.createElement("div");
  row.setAttribute("class","row");

  var div1=document.createElement("div");
  div1.setAttribute("class","col-md-1 col1");

  var lbl=document.createElement("label");
  lbl.setAttribute("class","form-label");

  var h=document.createElement("h4");
  h.innerHTML=j;

  var div2=document.createElement("div");
  div2.setAttribute("class","col-md-11 textarea");

  //
  var sel=document.createElement("select");
 sel.setAttribute("class","select form-select form-select-sm");
 sel.setAttribute("id","co");
 sel.setAttribute("name",$cocode);
 sel.setAttribute("required","required");

var opt=document.createElement("option");
opt.setAttribute("value","");
opt.innerHTML="Select Course Outcome";


sel.appendChild(opt);

const optv=[];

  var count=-1;         
                            <?php
                            $cid=$_GET['id'];
                            $year=$_GET['year'];
                              $sql="SELECT oid,outcome FROM course_outcome WHERE cid='$cid' AND year='$year'";
                              $result=$conn->query($sql);
                              while($row=$result->fetch_assoc()){?>
                                count++;
                                optv[count]=document.createElement("option");
                                optv[count].setAttribute("value","<?php echo $row['oid'];?>");
                                optv[count].innerHTML="<?php echo $row['outcome'];?>";
                                sel.appendChild(optv[count]);
                              <?php

                            }?>

  var div3=document.createElement("div");
  div3.setAttribute("class","col-md-10 textarea");

  var in3=document.createElement("input");
  in3.setAttribute("class","form-control");
  in3.setAttribute("name",$qNumber);
  in3.setAttribute("placeholder","write question here..");
  in3.setAttribute("required","required");

  var div4=document.createElement("div");
  div4.setAttribute("class","col-md-2 textarea");

  var in4=document.createElement("input");
  in4.setAttribute("class","form-control");
  in4.setAttribute("name",$fm);
  in4.setAttribute("placeholder","full marks");
  in4.setAttribute("pattern","[0-9]|10");

  console.log("hi five");

  div4.appendChild(in4);
  div3.appendChild(in3);
  div2.appendChild(sel);
  lbl.appendChild(h);
  div1.appendChild(lbl);
  row.appendChild(div1);
  row.appendChild(div2);
  row.appendChild(div3);
  row.appendChild(div4);
  cardBody.appendChild(row);
  card.appendChild(cardBody);
  p1.appendChild(card);

  

  
  
  
 
}
/*end add questions*/

</script>

</body>
</html>