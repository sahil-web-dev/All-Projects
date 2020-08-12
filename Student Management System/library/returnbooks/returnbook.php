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
<title>Return Books</title>
<Link href="../CSS/returnbook.css" rel="stylesheet" type="text/css"/>
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
	<h3>Return Books</h3><br/><br/>
	<?php 
include('../../dbcon.php');
$id=$_POST['SID'];
$sql="SELECT * FROM issue_books WHERE StudentID='$id'";
$run=mysqli_query($con,$sql);
if(mysqli_num_rows($run)<1)
{
	?>
	<script>
		alert('NO RECORDS FOUND FOR THIS CARD');
		window.open('return.php','_self');
	</script>
	<?php
}else
{
	{
	while($data=mysqli_fetch_assoc($run))
		{
		?>
			<form name="frm" action="mainreturn.php" method="post">
				<div class="c1">
				<label>Student ID:</label><input type="number" name="SM" value=<?php echo $data['StudentID']; ?>><br/>
				<label>Name:</label><input type="text" name="Studentname" value=<?php echo $data['Studentname']; ?>><br/>
				<label>Mobile No:</label><input type="number" name="StudentMobileNo" value=<?php echo $data['StudentMobileNo'];?>><br/>
				<label>Year:</label><input type="text" name="year" value=<?php echo $data['Year']; ?>><br/>
			</div>
			<div class="c2">
				<label>Book ID:</label><input type="number" name="bid" value=<?php echo $data['book_id'];?>><br/>
				<label>Book Name:</label><input type="text" name="bname" value=<?php echo $data['book_name'];?>><br/>
				<label>Book Name:</label><input type="text" name="athname" value=<?php echo $data['author_name'];?>><br/>
				<label>Book Name:</label><input type="text" name="pbname" value=<?php echo $data['publication'];?>><br/>
				<label>Book Issue Date:</label><input type="text" name="idate" value=<?php echo $data['issue_date']; ?>><br/>
			</div>
			<div class="c3">
				<input type="submit" value="Return">
			</div>
			</form>
			<?php
		}
	}
}



