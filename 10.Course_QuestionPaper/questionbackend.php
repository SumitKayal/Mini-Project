<?php
    include('../config.php');

    $year=$_GET['year'];
    $cid=$_GET['id'];

    $qtype=$_POST['qtype'];

    //$numQ=array($_POST['numQ'],$_POST['numQ'],$_POST['numQ'])

    $numQ[0]=$_POST['numQ1'];
    $numQ[1]=$_POST['numQ2'];
    $numQ[2]=$_POST['numQ3'];
    for($y=0;$y<=2;$y++){

    for($x=1;$x<=$numQ[$y];$x++){

        $qnum=($y+1).".".$x;
        $v="courseCode".($y+1)."".$x;
        
        $coname=$_POST[$v];

        $qt="q".($y+1)."".$x;
        $qtext=$_POST[$qt];
        $fm="fm".($y+1)."".$x;
        $fmarks=$_POST[$fm];

        //echo  $qtext."\t\t". $fmarks."\t\t". $coname.",,,,,";
        
            $sql1="INSERT INTO ".$qtype." (qnum,qtext,oid,fullmarks) VALUES ('$qnum','$qtext','$coname','$fmarks')";
            $conn->query($sql1);
        
       /* else if($qtype=="midterm"){
            $sql2="INSERT INTO mid_question (mqnum,mqtext,oid,fullmarks) VALUES ('$qnum','$qtext','$coname','$fmarks')";
            $conn->query($sql2);
        }*/
            

    }
}
    header("Location: ../8.Course start Page\Course start Page.php?id=".$cid."&year=".$year);

?>