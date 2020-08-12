<?php
include('../../dbcon.php');

$bid=$_POST['bid'];
$id=$_POST['SM'];

mysqli_query($con,"DELETE FROM issue_books WHERE book_id='$bid'");
	?>
	<script>
		alert("Book Returned Successfully");
		window.open('return.php','_self');
	</script>
	<?php

?>
