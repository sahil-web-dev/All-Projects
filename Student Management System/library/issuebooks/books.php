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
<Link href="../CSS/books.css" rel="stylesheet" type="text/css">
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
$id=$_POST['SM'];
$bookid=$_POST['bookid'];

$sql="SELECT * FROM books WHERE book_id='$bookid'";
$run=mysqli_query($con,$sql);
if(mysqli_num_rows($run)<1)
{
	?>
	<script>
		alert('NO BOOK');
		window.open('issue.php','_self');
	</script>
	<?php
}else
{
	$res=mysqli_query($con,"SELECT * FROM library WHERE StudentID='$id'");
	while($data=mysqli_fetch_assoc($res))
	{
			?>
			<form action="mainissue.php" method="post">
				<div class="c1">
				<label>Student ID:</label><input type="number" name="SM" value=<?php echo $data['StudentID']; ?>><br/>
				<label>Name:</label><input type="text" name="Studentname" value=<?php echo $data['Studentname']; ?>><br/>
				<label>Mobile No:</label><input type="number" name="StudentMobileNo" value=<?php echo $data['StudentMobileNo'];?>><br/>
				<label>Year:</label><input type="text" name="year" value=<?php echo $data['Year']; ?>><br/>
			</div>
				<?php
		
	}
	$qry=mysqli_query($con,"SELECT * FROM books WHERE book_id='$bookid'");
	while($big=mysqli_fetch_assoc($qry))
	{
			?>
			<div class="c2">
			<label>Book ID:</label><input type="number" name="bid" value=<?php echo $big['book_id'];?>><br/>
			<label>Book Name:</label><input type="text" name="bname" value=<?php echo $big['book_name'];?>><br/>
			<label>Author Name:</label><input type="text" name="athname" value=<?php echo $big['author_name'];?>><br/>
			<label>Publication:</label><input type="text" name="pbname" value=<?php echo $big['publication'];?>><br/>
			<label>Book Issue Date:</label><input type="text" name="idate" value=<?php echo date("d-M-Y"); ?>><br/>
		</div>
		<div class="c3">
			<input type="submit" value="ISSUE">
		</div>
		</form>
		<?php
		
	}
}
?>
