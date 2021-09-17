<?php

include('config.php');
$id = $_GET['id'];
$year = $_GET['year'];
/*$fname = $id . ".xls";

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=" . $fname);
*/$sql = "SELECT CourseName FROM course WHERE CID='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$outcomeName = array();
$outComeId = array();
$indevidualCoOfAStudent=array();
//$indevidualTotalCo=array();
$totalCoObtail=array();
$fetchCoNameSql="SELECT DISTINCT(co.oid),co.outcomeName FROM course_outcome co WHERE co.cid='$id' AND co.year='$year' ORDER BY co.oid";
$resultFetchCoName=$conn->query($fetchCoNameSql);
$coCount=0;
while ($rowFetchCoName=$resultFetchCoName->fetch_assoc()) {
	$indevidualCoOfAStudent[$rowFetchCoName['oid']]=0;
	//$indevidualTotalCo[$rowFetchCoName]=0;
	$totalCoObtail[$rowFetchCoName['oid']]=0;
	$outcomeName[$coCount]=$rowFetchCoName['outcomeName'];
	$outComeID[$coCount]=$rowFetchCoName['oid'];
	$coCount++;
}

$countEndQuestionCo="SELECT COUNT(DISTINCT co.oid) FROM question q,course_outcome co WHERE q.oid=co.oid AND co.CID='$id' AND co.year='$year'";
$resultEndQuestionCountCo = $conn->query($countEndQuestionCo);
$rowEndQuestionCountCo = $resultEndQuestionCountCo->fetch_assoc();


$countMidQuestionCo="SELECT COUNT(DISTINCT co.oid) FROM mid_question mq,course_outcome co WHERE mq.oid=co.oid AND co.CID='$id' AND co.year='$year'";
$resultMidQuestionCountCo = $conn->query($countMidQuestionCo);
$rowMidQuestionCountCo = $resultMidQuestionCountCo->fetch_assoc();
?>
<table border='1'>
	<tr>
		<th>
			Examination Roll No.
		</th>
		<th colspan="<?php echo $rowMidQuestionCountCo['COUNT(DISTINCT co.oid)'] ?>">
			Internal Assesment
		</th>
		<th colspan="<?php echo $rowEndQuestionCountCo['COUNT(DISTINCT co.oid)']; ?>">
			End Semester
		</th>
		<th colspan="<?php echo $coCount ?>">
			Direct Assesment
		</th>
		<th colspan="<?php echo $coCount ?>">
			InDirect Assesment
		</th>
		<th colspan="<?php echo $coCount ?>">
			Total Co Attenment
		</th>
	</tr>
	<tr>
		<td>

		</td>

        <?php
        $individualTotalCoInMidSemSql = "SELECT co.oid,outcomeName,sum(fullmarks) FROM mid_question mq,course_outcome co WHERE mq.oid=co.oid AND co.CID='$id' AND co.year='$year' GROUP BY co.oid ORDER BY co.oid";
        $resultIndividualTotalCoInMidSem = $conn->query($individualTotalCoInMidSemSql);
        $count = 0;
		while ($rowIndividualTotalCoInMidSem = $resultIndividualTotalCoInMidSem->fetch_assoc()) {
			$fullMidnum[$count] = $rowIndividualTotalCoInMidSem['sum(fullmarks)'];
			$fm = $fullMidnum[$count];
			$count++;?>
			<td>
		  		<?php echo $rowIndividualTotalCoInMidSem['outcomeName'] . "<br>" . $fm;  //printing outcome name and their corressponding full marks ?>
			</td>
		<?php } ?>


		<?php
      	$individualTotalCoInEndSemSql = "SELECT co.oid,outcomeName,sum(fullmarks) FROM question q,course_outcome co WHERE q.oid=co.oid AND co.CID='$id' AND co.year='$year' group by co.oid ORDER BY co.oid";
      	$resultIndividualTotalCoInEndSem = $conn->query($individualTotalCoInEndSemSql);
      	$count = 0;
      	while ($rowIndividualTotalCoInEndSem = $resultIndividualTotalCoInEndSem->fetch_assoc()) {
      		$fullnum[$count] = $rowIndividualTotalCoInEndSem['sum(fullmarks)'];
            $fm = $fullnum[$count];
            $count++; ?>
            <td>
              <?php echo $rowIndividualTotalCoInEndSem['outcomeName'] . "<br>" . $fm; ?>
            </td>
		<?php } 

		for($i=0;$i<$coCount;$i++){?>
			<td>
				<?php echo $outcomeName[$i]; ?>
			</td>
		<?php }

		for($i=0;$i<$coCount;$i++){?>
			<td>
				<?php echo $outcomeName[$i]; ?>
			</td>
		<?php }

		for($i=0;$i<$coCount;$i++){?>
			<td>
				<?php echo $outcomeName[$i]; ?>
			</td>
		<?php }?>

	</tr>
	<?php
	$studentCount=0;
	$allStudentInCourseSql = "SELECT exmroll FROM course c,stu_info sf WHERE c.CID='$id' AND sf.ssem=c.sem ORDER BY exmroll";
    $resultAllStudentInCourse = $conn->query($allStudentInCourseSql);
    while (($rowAllStudentInCourse = $resultAllStudentInCourse->fetch_assoc())) {
      $studentCount++;
      $exroll = $rowAllStudentInCourse['exmroll']; ?>
      <tr>
	      	<td>
	      		<?php echo $exroll; ?>
	      	</td>

	      	<?php
	        $individualMarskObtainInMidCoSql = "SELECT oid,sum(marks) FROM stu_midmarks smm, mid_question mq WHERE smm.qid=mq.qid AND exroll='$exroll' AND smm.qid IN(SELECT mq.qid FROM course_outcome co,mid_question mq WHERE mq.oid=co.oid AND cid='$id' AND co.year='$year' ORDER BY smm.qid) GROUP BY oid ORDER BY oid ";
	        $resultIndividualMarskObtainInMidCo = $conn->query($individualMarskObtainInMidCoSql);
	        $count = -1;
	        if($resultIndividualMarskObtainInMidCo->num_rows>0){
	        	while ($rowIndividualMarskObtainInMidCo = $resultIndividualMarskObtainInMidCo->fetch_assoc()) {
				$count++;
				$numobtain = $rowIndividualMarskObtainInMidCo['sum(marks)'];
				$percentage = ($numobtain / $fullMidnum[$count]) * 100; // calculating percentage value
				$indevidualCoOfAStudent[$rowIndividualMarskObtainInMidCo['oid']]=.3*$percentage;
				?>
				<td>
				<?php echo $numobtain;?>
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
	        $individualMarskObtainInEndCoSql = "SELECT oid,sum(marks) FROM stu_marks sm,question q WHERE sm.qid=q.qid AND exroll='$exroll' AND sm.qid IN(SELECT q.qid FROM course_outcome co,question q WHERE q.oid=co.oid AND cid='$id' AND co.year='$year' ORDER BY sm.qid) GROUP BY oid ORDER BY oid";
	        $resultIndividualMarskObtainInEndCo = $conn->query($individualMarskObtainInEndCoSql);
	        $count = -1;
	        if($resultIndividualMarskObtainInEndCo->num_rows>0){
		        while ($rowIndividualMarskObtainInEndCo = $resultIndividualMarskObtainInEndCo->fetch_assoc()) {
		          $count++;
		          $numobtain = $rowIndividualMarskObtainInEndCo['sum(marks)'];

		          $percentage = ($numobtain / $fullnum[$count]) * 100; // calculating percentage value
		          $indevidualCoOfAStudent[$rowIndividualMarskObtainInEndCo['oid']]=$indevidualCoOfAStudent[$rowIndividualMarskObtainInEndCo['oid']]+(.7*$percentage);
		          ?>
		          <td>
		            <?php echo $numobtain;?>
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
	        }


	        //while($rowFeedback=$resultFeedback->fetch_assoc()){
	        foreach ($outComeID as $rowCoId) {
	        	?>
	        	<td>
	        		<span style="color:red;"><?php echo number_format(floor($indevidualCoOfAStudent[$rowCoId] * 100) / 100, 2, '. ', '') . "%"; ?></span>
	        	</td>

	        	<?php 
	        }
		    
	        $i=0;
		    $feedbackSql="SELECT f.oid, f.fscore FROM feedback f, course_outcome co WHERE co.oid=f.oid and co.cid='$id' AND co.year='$year' AND exmroll='$exroll'  ORDER BY f.oid";
	        $resultFeedback=$conn->query($feedbackSql);
	        if ($resultFeedback->num_rows>0) {
	        	while($rowFeedback=$resultFeedback->fetch_assoc()){
		        	while($rowFeedback['oid']!=$outComeID[$i]){
		        		$i++;?>
		        		<td>
		        			
		        		</td>
		        	<?php }
		        	$feedbackParcentage=($rowFeedback['fscore']/5)*100;
		        	$indevidualCoOfAStudent[$rowFeedback['oid']]=$indevidualCoOfAStudent[$rowFeedback['oid']]*.9 + $feedbackParcentage*.1;
		        	?>
		        	<td>
		        		<span style="color:red;"><?php echo number_format(floor($feedbackParcentage * 100) / 100, 2, '. ', '') . "%"; ?></span>
		        	</td>
		        	<?php $i++;
		        }
	        }
	        else{
	        	for ($i=0; $i <$coCount ; $i++) {
	        		$indevidualCoOfAStudent[$outComeID[$i]]=$indevidualCoOfAStudent[$outComeID[$i]]*.9;?> 
					<td>
						
					</td>
	        	<?php }
	        }

	        foreach ($outComeID as $rowCoId) {
	        	$totalCoObtail[$rowCoId]+=$indevidualCoOfAStudent[$rowCoId];
	        	?>
	        	<td>
	        		<span style="color:red;"><?php echo number_format(floor($indevidualCoOfAStudent[$rowCoId] * 100) / 100, 2, '. ', '') . "%"; ?></span>
	        	</td>

	        	<?php 
	        	$indevidualCoOfAStudent[$rowCoId]=0;
	        }

	        ?>
      </tr>
    <?php }?>

    
</table>
<?php 
	foreach ($outComeID as $rowCoId){
		$attainment=number_format(floor($totalCoObtail[$rowCoId]/$studentCount * 100) / 100, 2);
		$updateAttainmentSql="UPDATE course_outcome co SET attainment='$attainment' WHERE co.oid='$rowCoId'";
		$conn->query($updateAttainmentSql);
	}
?>
<table border='1'>
	<tr>
		<th>
			Course Outcome
		</th>
		<th>
			Attainment
		</th>
	</tr>
	<tr>
		<?php 
		foreach ($outComeID as $rowCoId){
			$showAttainmentSql="SELECT co.outcomeName, co.attainment from course_outcome co WHERE co.oid='$rowCoId'";
			$resultShowAttainment=$conn->query($showAttainmentSql);
			while($rowShowAttainment=$resultShowAttainment->fetch_assoc()){?>
				<tr>
					<td>
						<?php echo $rowShowAttainment['outcomeName']?>
					</td>
					<td>
						<?php echo $rowShowAttainment['attainment']?>
					</td>
				</tr>
			<?php }

		}?>
	</tr>
</table>