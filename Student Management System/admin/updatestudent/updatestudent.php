<?php

include('../../dbcon.php');

$ssid=$_POST['ssid'];
$id=$_POST['StudentID'];
$name=$_POST['Studentname'];
$city=$_POST['City'];
$mobno=$_POST['StudentMobileNo'];
$mailid=$_POST['StudentMailID'];
$dob=$_POST['DateOfBirth'];
$yr=$_POST['Year'];
$photo=$_FILES['Photo']['name'];
$tempname=$_FILES['Photo']['tmp_name'];


move_uploaded_file($tempname,"../../StudentPhoto/$photo");


$qry=$con->prepare("UPDATE adminstudent SET StudentID='$id',Studentname='$name',City='$city',StudentMobileNo='$mobno',StudentMailID='$mailid',DateOfBirth='$dob',Year='$yr',Photo='$photo' WHERE StudentID='$ssid'"); 
	$qrya= $con->prepare("UPDATE canteen SET StudentID='$id',Studentname='$name',StudentMobileNo='$mobno' WHERE StudentID='$ssid'");
	$qryb= $con->prepare("UPDATE balance SET StudentID='$id',Studentname='$name',StudentMobileNo='$mobno' WHERE StudentID='$ssid'");
	$qryc=$con->prepare("UPDATE documents SET StudentID='$id',Studentname='$name',StudentMobileNo='$mobno' WHERE StudentID='$ssid'");
	$qryd=$con->prepare("UPDATE library SET StudentID='$id',Studentname='$name',StudentMobileNo='$mobno',Year='$yr' WHERE StudentID='$ssid'");

if($qry->execute() AND $qrya->execute() AND $qryb->execute() AND $qryc->execute() AND $qryd->execute())
{
	?>
	<script>
		alert('DATA UPDATED Successfully');
		window.open('search.php','_self');
	</script>
<?php
}
?>
