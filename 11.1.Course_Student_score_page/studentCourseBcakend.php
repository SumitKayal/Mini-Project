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
    $examtype=$_POST['examtype'];
    if($examtype=="es"){
        $tableName="question";
        $corrTableName="stu_marks";
    }
    else if($examtype=="ia"){
        $tableName="mid_question";
        $corrTableName="stu_midmarks";
    }
    

    $sql="SELECT qid FROM $tableName,course_outcome co WHERE $tableName.oid=co.oid AND co.cid='$cid' AND co.year='$year' ORDER BY $tableName.qnum";
    $result=$conn->query($sql);
  
    while($row=$result->fetch_assoc()){
        $qid=$row['qid'];
        $marks=$_POST[$qid];
        $exroll=$_POST['exroll'];
        $sql2="INSERT INTO $corrTableName (exroll,qid,marks) VALUES('$exroll','$qid','$marks')";
        $conn->query($sql2);

    }
}

 

 ?>
<script type="text/javascript"> 
	alert('marks inserted successfully'); 
    <?php
	 header("refresh:1; url=Course_Student_score_page.php?id=". $cid ."&year=".$year) ;
    ?>

</script>
 
 