<?php

include('../../dbcon.php');


$id=$_POST['SM'];
$amt=$_POST['balance'];
$mob=$_POST['StudentMobileNo'];
$name=$_POST['Studentname'];



$qry= $con->prepare("UPDATE balance SET Balance=Balance+$amt WHERE StudentID='$id'" );

if($qry->execute())
{
	?>
	<script>
		alert('Amount Added Successfully');
		window.open('searchbal.php','_self');
	</script>
<?php
}
?>