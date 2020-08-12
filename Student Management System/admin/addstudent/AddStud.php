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
	<title>Add Student</title>
	<Link href="../CSS/AddStud.css" rel="stylesheet" type="text/css" >
	<Link href="../CSS/Logo.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript">
		function val(){
			if(frm.StudentMobileNo.value=="")
			{
				alert("Please enter the phone number");
				frm.StudentMobileNo.focus();
				return false;
			}
			if((frm.StudentMobileNo.value).length <10)
			{

				alert("Mobile number should be minimum 10 digits");
				frm.StudentMobileNo.focus();
				return false;
			}
			if((frm.StudentMobileNo.value).length >10)
			{

				alert("Mobile number should be minimum 10 digits");
				frm.StudentMobileNo.focus();
				return false;
			}
			return true;
		}
	</script>
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
		<h3>Add Student</h3>
	<form name="frm" action="AddStudent.php" method="post" enctype="multipart/form-data">
		<div class="left">
			<label>Student ID:</label><input type="number" name="StudentID" placeholder="Student ID Here"><br/>
			<label>Name:</label><input type="text" name="Studentname" placeholder="Student Name Here">
			<label>City:</label><input type="text" name="City" placeholder="Name Of City">
			<label>Mobile No:</label><input type="number" name="StudentMobileNo" placeholder="Mobile No."><br/>
		</div>
		<div class="right">
			<label>E-Mail ID:</label><input type="text" name="StudentMailID" placeholder="E-Mail ID">
			<label>Date Of Birth:</label><input type="date" name="DateOfBirth"><br/>
			<label>Year:</label><input type="text" name="Year" placeholder="Enter Year">
			<label>Student Photo:</label><input type="file" name="Photo" ><br/>
		</div>
		<div class="center">
			<input type="Submit" value="ADD STUDENT" onclick="return val();">
		</div>
	</form>
</body>
</html>
