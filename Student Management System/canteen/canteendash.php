<html>
<head>
	<title>FOOD ZONE</title>
	<Link href="CSS/back.css" rel="stylesheet" type="text/css"/>
	<Link href="CSS/Logo.css" rel="stylesheet" type="text/css"/>
</head>
<body>
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
	<h1>SELECT WHAT U WANT To EAT</h1>
	<form action="order.php?SID=<?php echo $_POST[$SID]?>" method="get">
		<table align="center" width="100%" border="1" style="margin-top: 10px;color:black; text-align: center;">
			<tr>
			<th>ITEM</th>
			<th>PRICE</th>
			</tr>
			<tr>
			<td>Tea<input type="checkbox" name="choice[]" value="1"/></td>
			<td>10/-</td>
			</tr> 
			<tr>  
			<td>Coffee<input type="checkbox" name="choice[]" value="2"/></td>
			<td>20/-</td>
			</tr>
			<tr>    
			<td>VEG RICE<input type="checkbox" name="choice[]" value="3"/></td>
			<td>100/-</td>
			</tr>
			<tr>   
			<td>Thali <input type="checkbox" name="choice[]" value="4"></td> 
			<td>120/-</td>
	    	</tr>
	    </table>
	    <br/><br/><br/>
	<input type="Submit" value="BUY">
</form>
</body>
	
 