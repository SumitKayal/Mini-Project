<?php
 session_start();
 include ('config.php');
 if($_SESSION['email']==""){
  header("Location: ../1.LogIn/logIn.html");
  exit();
}


        $email=$_SESSION['email'];
        $currentyear = date("Y");
        $sql1="SELECT c.CID FROM stu_info sf,course c WHERE c.sem=sf.ssem AND sf.exmroll='$email'";
        $result1=$conn->query($sql1);
        while($row1=$result1->fetch_assoc()){
            $courseid=$row1['CID'];
            $sql2="SELECT outcome,oid FROM course_outcome WHERE cid='$courseid' AND year='$currentyear'";
            $result2=$conn->query($sql2);
            while($row2=$result2->fetch_assoc()){
                $oid=$row2['oid'];
                

                $feedback=$_POST[$oid];

                $sqlvalid="DELETE  FROM feedback WHERE exmroll='$email' AND oid='$oid'";
                $conn->query($sqlvalid);

                $sql3="INSERT INTO feedback(exmroll, oid, fscore) VALUES ('$email','$oid','$feedback')";
                $conn->query($sql3);


            }
        }

        






 ?>
 <script type="text/javascript"> 
	alert('Your feedback is successfully submitted'); 
    <?php
	 header("refresh:1; url=logOut.php");
    ?>

    </script>