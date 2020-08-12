<html>
<head>
<title>View Transactions</title>

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
				<li><a href="../studentdash.php">Dashboard</a></li>
				<li><a href="../logout.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	<h3>Transactions</h3><br/><br/>
	<table align="center" width="100%" border="1" style="margin-top: 10px; text-align: center;">
				<tr>
					<th>Student ID</th>
					<th>Student Name</th>
					<th>Transaction ID</th>
					<th>Location</th>
					<th>Amount</th>
					<th>Transaction Date</th>
				</tr>
	<?php
include('../../dbcon.php');

$id=$_GET['SID'];
$sql="SELECT * FROM transactions WHERE StudentID='$id'";
$run=mysqli_query($con,$sql);
if(mysqli_num_rows($run)<1)
	{
	?>
	<script>
		alert('NO RECORDS FOUND');
		window.open('../login/studentlogin.php','_self');
	</script>
	<?php
	}
	else
	{
while($data=mysqli_fetch_assoc($run))
		{
			?>
			
				<tr>
					<td><?php echo $data['StudentID']?></td>
					<td><?php echo $data['Studentname']?></td>
					<td><?php echo $data['Transaction_ID']?></td>
					<td><?php echo $data['Location']?></td>
					<td><?php echo $data['Amount']?></td>
					<td><?php echo $data['Transaction_Date']?></td>
				</tr>
				
				<?php

		}
	}

?>
</table>