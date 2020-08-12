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
	<title>Library Dashboard</title>
	<link href="CSS/libdashboard.css" rel="stylesheet" type="text/css" />
	<Link href="CSS/Logo.css" rel="stylesheet" type="text/css"/>
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
				<li><a href="../index.php">HOME</a></li>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">Contact US</a></li>
				<li><a href="logout.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	<div class="menu">
		<div><a href="addbooks/adbook.php">ADD BOOKS</a></div>
		<div><a href="issuebooks/issue.php">ISSUE BOOKS</a></div>
		<div><a href="returnbooks/return.php">RETURN BOOKS</a></div>
		<div><a href="displaybook/di.php">DISPLAY ISSUED BOOKS</a></div>
	</div>
</body>
</html>