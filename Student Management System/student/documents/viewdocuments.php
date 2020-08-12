<html>
<head>
<title>View Documents</title>

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
	<h3>Documents</h3><br/><br/>
<?php
include('../../dbcon.php');

$id=$_GET['SID'];

$sql="SELECT * FROM documents WHERE StudentID='$id'";
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
			<table align="center" width="100%" border="1" style="margin-top: 10px; text-align: center;">
				<tr>
					<th>Birth Certificate:</th>
					<th>Cast Certificate:</th>
					<th>10th Marksheet:</th>
					<th>SSC Leaving:</th>
				</tr>
				<tr>
					<td><a href="../../Documents/<?php echo $data['Birth_certi'];?>"><?php echo $data['Birth_certi'];?></td>
					<td><a href="../../Documents/<?php echo $data['Cast_certi'];?>"><?php echo $data['Cast_certi'];?></td>
					<td><a href="../../Documents/<?php echo $data['10th_marks'];?>"><?php echo $data['10th_marks'];?></td>
					<td><a href="../../Documents/<?php echo $data['ssc_leaving'];?>"><?php echo $data['ssc_leaving'];?></td>
				</tr>
			</table>
				<?php

		}
	}

?>


