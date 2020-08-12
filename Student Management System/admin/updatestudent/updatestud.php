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
<title>Update Student</title>
<Link href="../CSS/updatestud.css" rel="stylesheet" type="text/css"/>
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
	<h3>UPDATE STUDENT</h3><br/><br/>
	<table align="center" width="100%" border="1" style="margin-top: 10px;color:black; text-align: center;">
		<tr>
			<th>Student ID</th>
			<th>Name</th>
			<th>City</th>
			<th>Mobile No</th>
			<th>E-Mail ID</th>
			<th>Date Of Birth</th>
			<th>Year</th>
			<th>Student Photo</th>
			<th>Edit</th>
		</tr>
<?php 
include('../../dbcon.php');

$id=$_POST['SID'];

$sql="SELECT * FROM adminstudent WHERE StudentID='$id'";
$run=mysqli_query($con,$sql);
if(mysqli_num_rows($run)<1)
{
	?>
	<script>
		alert('NO RECORDS FOUND FOR THIS CARD');
		window.open('search.php','_self');
	</script>
	<?php
}
else
{
	while($data=mysqli_fetch_assoc($run))
		{
		?>
		<tr>
			<td><?php echo $data['StudentID'] ?></td>
			<td><?php echo $data['Studentname'] ?></td>
			<td><?php echo $data['City'] ?></td>
			<td><?php echo $data['StudentMobileNo'] ?></td>
			<td><?php echo $data['StudentMailID'] ?></td>
			<td><?php echo $data['DateOfBirth'] ?></td>
			<td><?php echo $data['Year'] ?></td>
			<td><img src="../../StudentPhoto/<?php echo $data['Photo'] ?>" style="max-width: 175px;max-height: 175px" /></td>
			<td><a href="editstudent.php?sid=<?php echo $data['StudentID'] ?>" style="height:30px;line-height: 30px;color:black;width:300px;">Edit</a></td>
		</tr>
		<?php 
		}
}
?>
</table>
