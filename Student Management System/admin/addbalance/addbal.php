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
<title>ADD BALANCE</title>
<Link href="../CSS/addbalance.css" rel="stylesheet" type="text/css"/>
<Link href="../CSS/Logo.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
		function val(){
			if(frm.cbalance.value >3000)
			{
				alert("Limit is 3000");
				frm.cbalance.focus();
				return false;
			}
			if(frm.balance.value=="")
			{
				alert("Please enter the amount");
				frm.balance.focus();
				return false;
			}
			if(frm.balance.value >3000)
			{
				alert("Please enter the amount less than 3000");
				frm.balance.focus();
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
				<li><a href="../logout.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	<h3>ADD BALANCE</h3><br/><br/>

	<?php 
include('../../dbcon.php');

$id=$_POST['SID'];

$sql="SELECT * FROM balance WHERE StudentID='$id'";
$run=mysqli_query($con,$sql);
if(mysqli_num_rows($run)<1)
{
	?>
	<script>
		alert('NO RECORDS FOUND FOR THIS CARD');
		window.open('searchbal.php','_self');
	</script>
	<?php
}
else
{
	while($data=mysqli_fetch_assoc($run))
		{
		?>
		<form name="frm" action="addbalance.php" method="post">
			<div class="lft">
			<label>Student ID:</label><input type="number" name="SM" value=<?php echo $data['StudentID']; ?>><br/>
			<label>Name:</label><input type="text" name="Studentname" value=<?php echo $data['Studentname']; ?>><br/>
		</div>
		<div class="rght">
			<label>Mobile No:</label><input type="number" name="StudentMobileNo" value=<?php echo $data['StudentMobileNo']; ?>><br/>
			<label>Cuurent Balance:</label><input type="number" name="cbalance" value=<?php echo $data['Balance'];?> disabled="disabled"><br/>
			</div>

		<div class="cent">
			<label>Enter Amount:</label><input type="number" name="balance" placeholder="Enter Amount Here">
		
			<input type="submit" value="Add Balance" onclick="return val();">
		</form>
	</div>
		<?php
	}
}
?>
