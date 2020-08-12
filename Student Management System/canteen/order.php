<head>
<title>PAY AMOUNT</title>
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
				<li><a href="../../index.php">HOME</a></li>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">Contact US</a></li>
			</ul>
		</nav>
	</header>
	<h3>Payment</h3><br/><br/>
	<form action="Pay.php" method="post">
		<table align="center" width="30%" border="1" style="margin-top: 10px;color:black; text-align: center;">
<?php
include('../dbcon.php');

if(isset($_GET["choice"])){

$food=$_GET["choice"];
$c=count($food);
$price=0.0;
for($i=0;$i<$c;$i++){

	if($food[$i]==1){
		$price=$price+10;
		?>
		<tr>
		<td><?php echo "You have selected TEA";?></td><br/>
		</tr>
		<?php
	}
	if($food[$i]==2){
		$price=$price+20;
		?>
		<tr>
		<td><?php echo"You have selected Coffee";?></td><br/>
		</tr>
		<?php	
	}
	if($food[$i]==3){
		$price=$price+100;
		?>
		<tr>
		<td><?php echo"You have selected Veg Rice<br>";?></td><br/>
		</tr>
		<?php	
	}
	if($food[$i]==4){
		$price=$price+120;
		?>
		<tr>
		<td><?php echo"You have selected Thali<br>";?></td><br/>
		</tr>
		<?php 
	}

}
?>
<label>TOTAL</label><input type="number" name="pr" value="<?php echo $price ?>"><br/><br/>
<label>Student ID</label><input type="number" name="mob" placeholder="Enter Mobile Number to Continue" >
<input type="submit" value="PAY">

<?php

}
else
{
	echo"Please choose something";
}
?>