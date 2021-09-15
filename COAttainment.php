<?php

include('config.php');

$id = $_GET['id'];
$year = $_GET['year'];

$sql = "SELECT CourseName FROM course WHERE CID='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
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
        $sql4 = "SELECT exmroll FROM course c,stu_info sf WHERE c.CID='$id' AND sf.ssem=c.sem ORDER BY exmroll";
        $result4 = $conn->query($sql4);
        while (($row4 = $result4->fetch_assoc())) { ?>
          <tr>
            <td>
              <?php
              echo $row4['exmroll'];
              ?>

            </td>
          </tr>
        <?php } ?>

      </table>
    </td>

    <td>

      <table style="width:100%" border='1'>
        <tr>
          <?php
          $sql1 = "SELECT co.oid,outcomeName,sum(fullmarks) FROM question q,course_outcome co WHERE q.oid=co.oid AND co.CID='$id' AND co.year='$year' group by co.oid ORDER BY co.oid";
          $result1 = $conn->query($sql1);
          $count = 0;
          while ($row1 = $result1->fetch_assoc()) {
            $fullnum[$count] = $row1['sum(fullmarks)'];
            $fm = $fullnum[$count];
            $count++;
          ?>
            <th>
              <?php echo $row1['outcomeName'] . "<br>" . $fm; ?>
            </th>
          <?php } ?>
        </tr>




        <?php
        $sql2 = "SELECT exmroll FROM course c,stu_info sf WHERE c.CID='$id' AND sf.ssem=c.sem ORDER BY exmroll";
        $result2 = $conn->query($sql2);
        while (($row2 = $result2->fetch_assoc())) {
          $exroll = $row2['exmroll']; ?>
          <tr>
            <?php
            $sql3 = "SELECT oid,sum(marks) FROM stu_marks sm,question q WHERE sm.qid=q.qid AND exroll='$exroll' AND sm.qid IN(SELECT q.qid FROM course_outcome co,question q WHERE q.oid=co.oid AND cid='$id' AND co.year='$year' ORDER BY sm.qid) GROUP BY oid";
            $result3 = $conn->query($sql3);
            $count = -1;
            while ($row3 = $result3->fetch_assoc()) {
              $count++;
              $numobtain = $row3['sum(marks)'];

              $percentage = ($numobtain / $fullnum[$count]) * 100; // calculating percentage value


            ?>


              <td>
                <?php
                echo $numobtain . "\t" . "("; ?>
                <span style="color:red;"><?php echo number_format(floor($percentage * 100) / 100, 2, '. ', '') . "%"; ?></span>)
                <!-- printing obtained marks and in-percentage-->


              <?php } ?>
              </td>
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
          $sql4 = "SELECT co.oid,outcomeName,sum(fullmarks) FROM mid_question mq,course_outcome co WHERE mq.oid=co.oid AND co.CID='$id' AND co.year='$year' GROUP BY co.oid ORDER BY co.oid";
          $result4 = $conn->query($sql4);
          $count = 0;
          while ($row4 = $result4->fetch_assoc()) {
            $fullnum[$count] = $row4['sum(fullmarks)'];
            $fm = $fullnum[$count];
            $count++;

          ?>
            <th>
              <?php
              echo $row4['outcomeName'] . "<br>" . $fm;  //printing outcome name and their corressponding full marks
              ?>
            </th>
          <?php } ?>
        </tr>




        <?php
        $sql5 = "SELECT exmroll FROM course c,stu_info sf WHERE c.CID='$id' AND sf.ssem=c.sem ORDER BY exmroll";
        $result5 = $conn->query($sql5);

        while (($row5 = $result5->fetch_assoc())) {
          $exroll = $row5['exmroll']; ?>
          <tr>
            <?php
            $sql6 = "SELECT oid,sum(marks) FROM stu_midmarks smm, mid_question mq WHERE smm.qid=mq.qid AND exroll='$exroll' AND smm.qid IN(SELECT mq.qid FROM course_outcome co,mid_question mq WHERE mq.oid=co.oid AND cid='$id' AND co.year='$year' ORDER BY smm.qid) GROUP BY oid";
            $result6 = $conn->query($sql6);
            $count = -1;
            while ($row6 = $result6->fetch_assoc()) {
              $count++;
              $numobtain = $row6['sum(marks)'];

              $percentage = ($numobtain / $fullnum[$count]) * 100; // calculating percentage value


            ?>


              <td>
                <?php
                echo $numobtain . "\t" . "("; ?>
                <span style="color:red;"><?php echo number_format(floor($percentage * 100) / 100, 2, '. ', '') . "%"; ?></span>)
                <!-- printing obtained marks and in-percentage-->


              <?php } ?>
              </td>

          </tr>
        <?php } ?>
      </table>
    </td>

  </tr>

</table>