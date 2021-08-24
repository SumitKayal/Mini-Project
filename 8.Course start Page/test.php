<?php

include ('../config.php');

$id=$_GET['id'];
$year=$_GET['year'];
$fname=$id.".xls";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=".$fname);
$sql="SELECT CourseName FROM course WHERE CID='$id'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
echo $row['CourseName'];
 ?>
 <br>
<table border='1'>
  <tr>
    <th>
      Examination Roll No
    </th>
    <th>
      University Examination
    </th>
    <th></th>
    <th>
      Midsem
    </th>
  </tr>


  <tr>
    <td>
      <table border='1'>
        <tr></tr>
        <tr></tr>
            <?php
            $sql4="SELECT exmroll FROM course c,stu_info sf WHERE c.CID='$id' AND sf.ssem=c.sem ORDER BY exmroll";
            $result4=$conn->query($sql4);
            while (($row4=$result4->fetch_assoc())) {?>
            <tr>
              <td>
                <?php
                  echo $row4['exmroll'];
                ?>
              
              </td>
            </tr>
          <?php }?>
        
      </table>
    </td>

    <td>

      <table style="width:100%" border='1'>
        <tr>
          <?php
          $sql1="SELECT co.oid,outcomeName,sum(fullmarks) FROM question q,course_outcome co WHERE q.oid=co.oid AND co.CID='$id' AND co.year='$year' group by co.oid ORDER BY co.oid";
          $result1=$conn->query($sql1);

          while($row1=$result1->fetch_assoc()){
          ?>
          <th>
            <?php echo $row1['outcomeName']."<br>".$row1['sum(fullmarks)'];?>
          </th> 
          <?php }?>
        </tr>




        <?php
        $sql2="SELECT exmroll FROM course c,stu_info sf WHERE c.CID='$id' AND sf.ssem=c.sem ORDER BY exmroll";
        $result2=$conn->query($sql2);
        while (($row2=$result2->fetch_assoc())) {
        $exroll=$row2['exmroll'];?>
        <tr>
          <?php
          $sql3="SELECT oid,sum(marks) FROM stu_marks sm,question q WHERE sm.qid=q.qid AND exroll='$exroll' AND sm.qid IN(SELECT q.qid FROM course_outcome co,question q WHERE q.oid=co.oid AND cid='$id' AND co.year='$year' ORDER BY sm.qid) GROUP BY oid";
          $result3=$conn->query($sql3);
          while($row3=$result3->fetch_assoc()){


          ?>


          <td>
            <?php echo $row3['sum(marks)'];?>
          </td>
          <?php } ?>
        </tr>
        <?php } ?>
      </table>

    </td>
    <td>
      
    </td>

    <td>

      <table style="width:100%" border='1'>
        <tr>
          <?php
          $sql1="SELECT co.oid,outcomeName,sum(fullmarks) FROM question q,course_outcome co WHERE q.oid=co.oid AND co.CID='$id' AND co.year='$year' group by co.oid ORDER BY co.oid";
          $result1=$conn->query($sql1);

          while($row1=$result1->fetch_assoc()){
          ?>
          <th>
            <?php echo $row1['outcomeName']."<br>".$row1['sum(fullmarks)'];?>
          </th> 
          <?php }?>
        </tr>




        <?php
        $sql2="SELECT exmroll FROM course c,stu_info sf WHERE c.CID='$id' AND sf.ssem=c.sem ORDER BY exmroll";
        $result2=$conn->query($sql2);
        while (($row2=$result2->fetch_assoc())) {
        $exroll=$row2['exmroll'];?>
        <tr>
          <?php
          $sql3="SELECT oid,sum(marks) FROM stu_marks sm,question q WHERE sm.qid=q.qid AND exroll='$exroll' AND sm.qid IN(SELECT q.qid FROM course_outcome co,question q WHERE q.oid=co.oid AND cid='$id' AND co.year='$year' ORDER BY sm.qid) GROUP BY oid";
          $result3=$conn->query($sql3);
          while($row3=$result3->fetch_assoc()){


          ?>


          <td>
            <?php echo $row3['sum(marks)'];?>
          </td>
          <?php } ?>
        </tr>
        <?php } ?>
      </table>

    </td>

  </tr>

</table>
 