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
	<title>Add Books</title>
	<Link href="../CSS/adbook.css" rel="stylesheet" type="text/css"/>
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
				<li><a href="logout.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	<h3>Add Books</h3>
	<form action="addbooks.php" method="post">
		<div class="l1">
			<label>Book ID:</label><input type="number" name="bookid" placeholder="Book ID Here"><br/>
			<label>Book Name:</label><input type="text" name="bookname" placeholder="Book Name Here">
			<label>Author Name:</label><input type="text" name="athname" placeholder="Name Of Author">
			<label>Publication:</label><input type="text" name="pbn" placeholder="Publication"><br/>
			<label>Purchase Date:</label><input type="date" name="prch"><br/>
			<input type="Submit" value="ADD BOOK">
		</div>
	</form>