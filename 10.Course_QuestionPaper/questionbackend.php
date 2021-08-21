<?php
    include('../config.php');

    $year=$_GET['year'];
    $cid=$_GET['id'];

    $numQ=$_POST['numQ'];
    for($x=1;$x<=$numQ;$x++){

        $qnum=$x;
        $v="courseCode".$x;
        
        $coname=$_POST[$v];

        $qt="q".$x;
        $qtext=$_POST[$qt];
        $fm="fm".$x;
        $fmarks=$_POST[$fm];

        $sql="SELECT oid FROM course_outcome WHERE year='$year' AND cid='$cid' AND outcomeName='$coname'";
        $result=$conn->query($sql);
        if($result->num_rows==1){
            $oid=$result->fetch_assoc()['oid'];
            $sql1="INSERT INTO question (qnum,qtext,oid,fullmarks) VALUES ('$qnum','$qtext','$oid','$fmarks')";
            $conn->query($sql1);

            
        }

    }
    header("Location: ../8.Course start Page\Course start Page.php?id=".$cid."&year=".$year);

?>