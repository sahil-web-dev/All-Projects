<?php
session_start();

	if($_SESSION['Username'])
	{
	}
	else
	{
		header('location:../librarian/login/librarylogin.php');
	}
?>
<html>
<head>
<title>Issue Books</title>
<Link href="../CSS/issue.css" rel="stylesheet" type="text/css"/>
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
	<h3>Issue Book</h3><br/><br/>
	<?php 
include('../../dbcon.php');
$id=$_POST['SID'];

$sql="SELECT * FROM library WHERE StudentID='$id'";
$run=mysqli_query($con,$sql);
if(mysqli_num_rows($run)<1)
{
	?>
	<script>
		alert('NO RECORDS FOUND FOR THIS CARD');
		window.open('issue.php','_self');
	</script>
	<?php
}else
{
	{
	while($data=mysqli_fetch_assoc($run))
		{
		?>
		<form name="frm" action="books.php" method="post">
			<div class="lft">
				<label>Student ID:</label><input type="number" name="SM" value=<?php echo $data['StudentID']; ?>><br/>
				<label>Name:</label><input type="text" name="Studentname" value=<?php echo $data['Studentname']; ?>><br/>
			</div>
			<div class="rght">
				<label>Mobile No:</label><input type="number" name="StudentMobileNo" value=<?php echo $data['StudentMobileNo'];?>><br/>
				<label>Year:</label><input type="text" name="year" value=<?php echo $data['Year']; ?>><br/>
			</div>
			<div class="cent">
				<label>Book ID:</label><input type="number" name="bookid" placeholder="Enter Book ID here">
				<input type="Submit" value="Search Book">
			</div>
			</form>
			<?php
		}
	}
}
?>

