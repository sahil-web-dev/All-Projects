<?php
session_start();

	if($_SESSION['Username'])
	{
	}
	else
	{
		header('location:librarian/login/librarylogin.php');
	}
?>
<html>
<head>
	<title>ISSUED BOOKS</title>
	<Link href="../CSS/di.css" rel="stylesheet" type="text/css"/>
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
				<li><a href="../libdash.php">Dashboard</a></li>
				<li><a href="../logout.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	<h3>ISSUED BOOKS</h3><br/><br/>
	<table align="center" width="100%" border="1" style="margin-top: 10px;color:black; text-align: center;">
				<tr>
				<th>Student ID</th>
				<th>Student Name</th>
				<th>Student Mobile NO</th>
				<th>Year</th>
				<th>Book ID</th>
				<th>Book Name</th>
				<th>Author Name</th>
				<th>Publication</th>
				<th>Book Issue Date</th>
			</tr>
	<?php 
	include('../../dbcon.php');
	$sql="SELECT * FROM issue_books";
	$run=mysqli_query($con,$sql);
	if(mysqli_num_rows($run)<1)
	{
	?>
	<script>
		alert('NO RECORDS FOUND FOR THIS CARD');
		window.open('../libdash.php','_self');
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
				<td><?php echo $data['StudentMobileNo']?></td>
				<td><?php echo $data['Year']?></td>
				<td><?php echo $data['book_id']?></td>
				<td><?php echo $data['book_name']?></td>
				<td><?php echo $data['author_name']?></td>
				<td><?php echo $data['publication']?></td>
				<td><?php echo $data['issue_date']?></td>
			</tr>
			<?php
		}
	}
	?>
</table>
		