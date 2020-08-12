<html>
<head>
<title>Student Login</title>
<link href="../CSS/verify.css" rel="stylesheet" type="text/css" />
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
			</ul>
		</nav>
	</header>
	<div class="lgm">
		<h3>Verify OTP</h3><br/><br/>
		<div class="lgm">
			<form action="" method="post">
				<?php
				if(isset($_POST['verify']))
				{
				$otp=$_POST['otp'];
				if($_COOKIE['otp']== $otp)
				{
					?>
					<script>
						alert('OTP verified');
						window.open('../studentdash.php?SID=<?php echo $_GET['SID']?>','_self');
					</script>
						<?php
				}
				else
				{
					?>
					<script>
						alert('Invalid OTP');
						window.open('studentlogin.php','_self');
					</script>
					<?php
				}
				}
				?>
				<label>Enter OTP</label><input type="number" name="otp" placeholder="Enter OTP Here">
				<input type="Submit" name="verify" value="Verify">
			</div>
			</form>