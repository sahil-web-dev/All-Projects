<?php
include('../../dbcon.php');

$id=$_POST['SM']; 
$name=$_POST['Studentname'];
$mob=$_POST['StudentMobileNo'];

$bc=$_FILES['Birth']['name'];
$tempname=$_FILES['Birth']['tmp_name'];
move_uploaded_file($tempname,"../../Documents/$bc");
$qry=$con->prepare("UPDATE documents SET Birth_certi='$bc' WHERE StudentID='$id' ");

$cc=$_FILES['Cast']['name'];
$tempname1=$_FILES['Cast']['tmp_name'];
move_uploaded_file($tempname1,"../../Documents/$cc");
$qrya=$con->prepare("UPDATE documents SET Cast_certi='$cc' WHERE StudentID='$id' ");

$ms=$_FILES['10th']['name'];
$tempname2=$_FILES['10th']['tmp_name'];
move_uploaded_file($tempname2,"../../Documents/$ms");
$qryb=$con->prepare("UPDATE documents SET 10th_marks='$ms' WHERE StudentID='$id' ");

$lc=$_FILES['leave']['name'];
$tempname3=$_FILES['leave']['tmp_name'];
move_uploaded_file($tempname3,"../../Documents/$lc");
$qryc=$con->prepare("UPDATE documents SET ssc_leaving='$lc' WHERE StudentID='$id' ");




if($qry->execute() AND $qrya->execute() AND $qryb->execute() AND $qryc->execute()) 
{
	?>
	<script>
		alert('Documents Added Successfully');
		window.open('searchadd.php','_self');
	</script>
<?php
}
?>
