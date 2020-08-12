<html>
<head>
<title>Student Login</title>
<link href="../CSS/student.css" rel="stylesheet" type="text/css" />
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
	<h3>Student Login</h3><br/><br/>
	<form action="" method="post">
		<?php
			if(isset($_POST['sendotp']))
			{

				include('../../dbcon.php');

				$id=$_POST['SID'];
				$mob=$_POST['mob'];

				$sql="SELECT * FROM adminstudent WHERE StudentID='$id' AND StudentMobileNo='$mob'";
				$run=mysqli_query($con,$sql);
				if(mysqli_num_rows($run)<1)
				{
					?>
					<script>
					alert('You are not user of this System');
					window.open('studentlogin.php','_self');
					</script>
				<?php
				}
				else
				{
					require('textlocal.class.php');
					require('credential.php');
					$textlocal = new Textlocal(false,false,API_KEY);

					$numbers = array($mob);
					$sender ='TXTLCL';
					$otp=mt_rand(1000,9000);
					$message = "Hello".$id." This is your OTP:" .$otp;
					try 
					{
				    $result = $textlocal->sendSms($numbers, $message, $sender);
				    setcookie('otp',$otp);
				    ?>
				    <script>
				    	alert('OTP sent Successfully');
				    	window.open('verfiy.php?SID=<?php echo $_POST['SID']?>','_self');
				    </script>
				    <?php
					} 
					catch (Exception $e)
				 	{
				    	die('Error: ' . $e->getMessage());
					}
				}
			}
			?>
		<input type="number" name="SID" placeholder="Enter Student ID">
		<input type="number" name="mob" placeholder="Enter Mobile No">
		<input type="Submit" name="sendotp" value="Send OTP">
	</form>
</div>
</body>
</html>