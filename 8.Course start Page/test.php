<?php

include('..\config.php');
$id = $_GET['id'];
$year = $_GET['year'];
$fname = $id . ".xls";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=" . $fname);
$sql = "SELECT CourseName FROM course WHERE CID='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$countEndQuestionCo="SELECT COUNT(DISTINCT co.oid) FROM question q,course_outcome co WHERE q.oid=co.oid AND co.CID='$id' AND co.year='$year'";
$resultEndQuestionCountCo = $conn->query($countEndQuestionCo);
$rowEndQuestionCountCo = $resultEndQuestionCountCo->fetch_assoc();


$countMidQuestionCo="SELECT COUNT(DISTINCT co.oid) FROM mid_question mq,course_outcome co WHERE mq.oid=co.oid AND co.CID='$id' AND co.year='$year'";
$resultMidQuestionCountCo = $conn->query($countMidQuestionCo);
$rowMidQuestionCountCo = $resultMidQuestionCountCo->fetch_assoc();
?>
<table border='1'>
  
  <thead>
     <tr>
      <th scope="col">
        Examination Roll No.
      </th>
      <th scope="col" colspan="<?php echo $rowMidQuestionCountCo['COUNT(DISTINCT co.oid)'] ?>">
        Internal Assesment
      </th>
      <th scope="col" colspan="<?php echo $rowEndQuestionCountCo['COUNT(DISTINCT co.oid)']; ?>">
        End Semester
      </th>
    </tr>
  <thead>
  
  <tr>
    <td>

    </td>

        <?php
        $sql4 = "SELECT co.oid,outcomeName,sum(fullmarks) FROM mid_question mq,course_outcome co WHERE mq.oid=co.oid AND co.CID='$id' AND co.year='$year' GROUP BY co.oid ORDER BY co.oid";
        $result4 = $conn->query($sql4);
        $count = 0;
    while ($row4 = $result4->fetch_assoc()) {
      $fullnum[$count] = $row4['sum(fullmarks)'];
      $fm = $fullnum[$count];
      $count++;?>
      <td>
          <?php echo $row4['outcomeName'] . "<br>" . $fm;  //printing outcome name and their corressponding full marks ?>
      </td>
    <?php } ?>


    <?php
        $sql1 = "SELECT co.oid,outcomeName,sum(fullmarks) FROM question q,course_outcome co WHERE q.oid=co.oid AND co.CID='$id' AND co.year='$year' group by co.oid ORDER BY co.oid";
        $result1 = $conn->query($sql1);
        $count = 0;
        while ($row1 = $result1->fetch_assoc()) {
          $fullnum[$count] = $row1['sum(fullmarks)'];
            $fm = $fullnum[$count];
            $count++; ?>
            <td>
              <?php echo $row1['outcomeName'] . "<br>" . $fm; ?>
            </td>
    <?php } ?>
  </tr>
  <?php
  $sql2 = "SELECT exmroll FROM course c,stu_info sf WHERE c.CID='$id' AND sf.ssem=c.sem ORDER BY exmroll";
    $result2 = $conn->query($sql2);
    while (($row2 = $result2->fetch_assoc())) {
      $exroll = $row2['exmroll']; ?>
      <tr>
        <td>
          <?php echo $exroll; ?>
        </td>

        <?php
        $sql6 = "SELECT oid,sum(marks) FROM stu_midmarks smm, mid_question mq WHERE smm.qid=mq.qid AND exroll='$exroll' AND smm.qid IN(SELECT mq.qid FROM course_outcome co,mid_question mq WHERE mq.oid=co.oid AND cid='$id' AND co.year='$year' ORDER BY smm.qid) GROUP BY oid";
        $result6 = $conn->query($sql6);
        $count = -1;
        if($result6->num_rows>0){
          while ($row6 = $result6->fetch_assoc()) {
      $count++;
      $numobtain = $row6['sum(marks)'];
      $percentage = ($numobtain / $fullnum[$count]) * 100; // calculating percentage value?>
      <td>
      <?php echo $numobtain . "\t" . "("; ?>
      <span style="color:red;"><?php echo number_format(floor($percentage * 100) / 100, 2, '. ', '') . "%"; ?></span>)
      <!-- printing obtained marks and in-percentage-->


      <?php } ?>
      </td>
        <?php }
        else{
          for($i=0;$i<$rowMidQuestionCountCo['COUNT(DISTINCT co.oid)'];$i++){?>
            <td>
              
            </td>
          <?php }
        }?>

        <?php
        $sql3 = "SELECT oid,sum(marks) FROM stu_marks sm,question q WHERE sm.qid=q.qid AND exroll='$exroll' AND sm.qid IN(SELECT q.qid FROM course_outcome co,question q WHERE q.oid=co.oid AND cid='$id' AND co.year='$year' ORDER BY sm.qid) GROUP BY oid";
        $result3 = $conn->query($sql3);
        $count = -1;
        if($result3->num_rows>0){
        while ($row3 = $result3->fetch_assoc()) {
          $count++;
          $numobtain = $row3['sum(marks)'];

          $percentage = ($numobtain / $fullnum[$count]) * 100; // calculating percentage value?>
          <td>
            <?php echo $numobtain . "\t" . "("; ?>
            <span style="color:red;"><?php echo number_format(floor($percentage * 100) / 100, 2, '. ', '') . "%"; ?></span>)
            <!-- printing obtained marks and in-percentage-->
        <?php
      } ?>
          </td>
          <?php } 
    else{
          for($i=0;$i<$rowEndQuestionCountCo['COUNT(DISTINCT co.oid)'];$i++){?>
            <td>
              
            </td>
          <?php }
        }?>
      </tr>
    <?php } ?>
</table>
