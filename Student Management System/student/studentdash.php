<html>
<head>
	<title>Student Dashboard</title>
	<link href="CSS/dashboard.css" rel="stylesheet" type="text/css" />
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
		<div><a href="transactions/viewtransaction.php?SID=<?php echo $_GET['SID']?>" >VIEW TRANSACTIONS</a></div>
		<div><a href="documents/viewdocuments.php?SID=<?php echo $_GET['SID']?>" >VIEW DOCUMENTS</a></div>
	</div>
</body>
</html>