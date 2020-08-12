<?php
session_start();

	if($_SESSION['Username'])
	{
	}
	else
	{
		header('location:../login/adminlogin.html');
	}

	include('../../dbcon.php');
	$sid=$_GET['sid'];
	$sql="SELECT * FROM adminstudent WHERE StudentID='$sid'";
	$run=mysqli_query($con,$sql); 

	$data=mysqli_fetch_assoc($run);  
?>
<html>
<head>
	<title>Update Student</title>
	<Link href="../CSS/editstud.css" rel="stylesheet" type="text/css">
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
					<li><a href="../login/adminlogin.html">LogOut</a></li>
				</ul>
			</nav>
		</header>
		<h3>UPDATE STUDENT</h3><br/><br/>
		<form name="frm" action="updatestudent.php" method="post" enctype="multipart/form-data">
		<div class="a1">
			<label>Student ID:</label><input type="number" name="StudentID" value=<?php echo $data['StudentID']; ?>><br/>
			<label>Name:</label><input type="text" name="Studentname" value=<?php echo $data['Studentname']; ?>>
			<label>City:</label><input type="text" name="City" value=<?php echo $data['City']; ?>>
			<label>Mobile No:</label><input type="number" name="StudentMobileNo" value=<?php echo $data['StudentMobileNo']; ?>><br/>
		</div>
		<div class="a2">
			<label>E-Mail ID:</label><input type="text" name="StudentMailID" value=<?php echo $data['StudentMailID']; ?>>
			<label>Date Of Birth:</label><input type="date" name="DateOfBirth" value=<?php echo $data['DateOfBirth']; ?>><br/>
			<label>Year:</label><input type="text" name="Year" value=<?php echo $data['Year'] ?>>
			<label>Student Photo:</label><input type="file" name="Photo" value=<img src="../../StudentPhoto/<?php echo $data['Photo'] ?>" style="max-width: 175px;max-height: 175px" /> ><br/>
			<input type="hidden" name="ssid" value="<?php echo $data['StudentID'];?>"/>
		</div>
		<div class="a3">
			<input type="Submit" value="UPDATE">
		</div>
		</form>
	</body>
	</html>