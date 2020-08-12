<?php
include('../../dbcon.php');


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


$qry=$con->prepare("INSERT  INTO `adminstudent`(`StudentID`, `Studentname`, `City`, `StudentMobileNo`, `StudentMailID`, `DateOfBirth`, `Year`, `Photo`) VALUES ('$id','$name','$city','$mobno','$mailid','$dob','$yr','$photo')"); 
	$qrya= $con->prepare("INSERT INTO `canteen`(`StudentID`, `Studentname`, `StudentMobileNo`) VALUES ('$id','$name','$mobno')");
	$qryb= $con->prepare("INSERT INTO `balance`(`StudentID`, `Studentname`, `StudentMobileNo`) VALUES ('$id','$name','$mobno')");
	$qryc=$con->prepare("INSERT INTO `documents`(`StudentID`, `Studentname`, `StudentMobileNo`) VALUES ('$id','$name','$mobno')");
	$qryd=$con->prepare("INSERT INTO `library`(`StudentID`, `Studentname`, `StudentMobileNo`, `Year`) VALUES ('$id','$name','$mobno','$yr')");

if($qry->execute() AND $qrya->execute() AND $qryb->execute() AND $qryc->execute() AND $qryd->execute())
{
	?>
	<script>
		alert('Data Inserted Successfully');
		window.open('AddStud.php','_self');
	</script>
<?php
}
?>
