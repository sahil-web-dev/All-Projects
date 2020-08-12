<?php
session_start();

	if($_SESSION['Username'])
	{
	}
	else
	{
		header('location:../login/adminlogin.html');
	}
?>
<html>
<head>
<title>ADD DOCUMENTS</title>
<Link href="../CSS/adddoc.css" rel="stylesheet" type="text/css"/>
<Link href="../CSS/Logo.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<header class="masthead">
		<div class="logo1">
			<h1 class="logo">
			  <span class="word2">&nbspSmartCard&nbsp</span>
			  <span class="word1">&nbspSystems&nbsp</span>
			</h1>
			<!-- @rblakejohnson o{-<]: -->
		</div>
		<nav>
			<ul>
				<li><a href="../../index.php">HOME</a></li>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">Contact US</a></li>
				<li><a href="../admindash.php">Dashboard</a></li>
				<li><a href="../logout.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	<h3>ADD DOCUMENTS</h3><br/><br/>
	<?php 
include('../../dbcon.php');

$id=$_POST['SID'];

$sql="SELECT * FROM documents WHERE StudentID='$id'";
$run=mysqli_query($con,$sql);
if(mysqli_num_rows($run)<1)
{
	?>
	<script>
		alert('NO RECORDS FOUND FOR THIS CARD');
		window.open('searchadd.php','_self');
	</script>
	<?php
}
else
{
	while($data=mysqli_fetch_assoc($run))
		{
		?>
		<form name="frm" action="adddocuments.php" method="post" enctype="multipart/form-data">
			<div class="c1">
			<label>Student ID:</label><input type="number" name="SM" value=<?php echo $data['StudentID']; ?>><br/>
			<label>Name:</label><input type="text" name="Studentname" value=<?php echo $data['Studentname']; ?>><br/><br/>
			<label>Mobile No:</label><input type="number" name="StudentMobileNo" value=<?php echo $data['StudentMobileNo'];?>><br/>
		</div>
		<div class="c2">
			<label>Birth Certificate:</label><input type="file" name="Birth" value=<?php echo $data['Birth_certi'];?>><br/><br/>
			<label>Cast Certificate:</label><input type="file" name="Cast" value=<?php echo $data['Cast_certi'];?>><br/><br/>
			<label>10th Marksheet:</label><input type="file" name="10th" value=<?php echo $data['10th_marks'];?>><br/><br/>
			<label>10th Leaving Certificate:</label><input type="file" name="leave" value=<?php echo $data['ssc_leaving'];?>>
		</div>
		<div class="c3">
			<input type="submit" value="ADD"><br/>
			</div>			
		</form>
		<?php
	}
}
?>
	
