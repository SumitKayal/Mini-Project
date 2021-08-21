<?php
 session_start();
 include ('../config.php');
 if($_SESSION['email']==""){
  header("Location: ../1.LogIn/logIn.html");
  exit();
}
$email=$_SESSION['email'];



if(isset($_POST)){
    $cid=$_POST['course_id'];
    $year=$_POST['year'];
    

    $sql="SELECT qid FROM question q,course_outcome co WHERE q.oid=co.oid AND co.cid='$cid' AND co.year='$year' ORDER BY q.qnum";
    $result=$conn->query($sql);
  
    while($row=$result->fetch_assoc()){
        $qid=$row['qid'];
        $marks=$_POST[$qid];
        $exroll=$_POST['exroll'];
        $sql2="INSERT INTO stu_marks (exroll,qid,marks) VALUES('$exroll','$qid','$marks')";
        $conn->query($sql2);

    }
}

 

 ?>

<script type="text/javascript"> 
	alert('marks inserted successfully'); 
	window.location.href = "Course_Student_score_page.php?id="+<?php echo $cid; ?>+"&year="+<?php echo $year; ?>;
</script>
 
 