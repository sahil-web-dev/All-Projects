<?php
include('../dbcon.php');

$mob=$_POST['mob'];
$pr=$_POST['pr'];


$sql="SELECT * FROM balance WHERE StudentMobileNo='$mob'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
$sid=$data['StudentID'];
$sname=$data['Studentname'];
$date=date('Y-m-d');

if(mysqli_num_rows($run)<1)
{
	?>
	<script>
		alert('Invalid Mobile No');
		window.open('../canteendash.php','_self');
	</script>
	<?php
}
else
	{
	mysqli_query($con,"UPDATE balance SET Balance=Balance-$pr WHERE StudentMobileNo='$mob'");
	mysqli_query($con,"INSERT INTO transactions(StudentID, Studentname, Transaction_ID, Location, Amount, Transaction_Date) VALUES ('$sid','$sname','','Canteen','$pr','$date')");

					require('login/textlocal.class.php');
					require('login/credential.php');
					$textlocal = new Textlocal(false,false,API_KEY);

					$numbers = array($mob);
					$sender ='TXTLCL';
					$otp=mt_rand(1000,9000);
					$message = "Hello".$sname." This is your Order No:" .$otp. "Amount Deducted from account is:".$pr;
					try 
					{
				    $result = $textlocal->sendSms($numbers, $message, $sender);
				    ?>
				    <script>
				    	alert('ORDER PLACED SUCCESSFULLY you will receive order number shortly');
						window.open('canteendash.php','_self');
				    </script>
				    <?php
					} 
					catch (Exception $e)
				 	{
				    	die('Error: ' . $e->getMessage());
					}
					
	}
?>
				
