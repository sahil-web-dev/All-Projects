<?php

	include('../../../dbcon.php');

	$Username=$_POST['Username'];
	$Password=$_POST['Password'];

	$sql="SELECT * from admins WHERE Username='$Username' AND Password='$Password'";
	$result=$con->query($sql);
	$row=mysqli_num_rows($result);
	if($row<1)
	{
		?>
		<script>
			alert('Invalid');
			window.open('librarylogin.php','_self');
		</script>
		<?php
	}
	else
	{
		$data=mysqli_fetch_assoc($result);

		$id=$data['Username'];
		
		session_start();

		$_SESSION['Username']=$id;
		header('location:../../libdash.php');


	}
	?>
	
	

