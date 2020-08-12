<?php

include('../../dbcon.php');

$id=$_POST['SM'];
$sname=$_POST['Studentname'];
$mob=$_POST['StudentMobileNo'];
$yr=$_POST['year'];
$bookid=$_POST['bid'];
$bookname=$_POST['bname'];
$authorname=$_POST['athname'];
$publication=$_POST['pbname'];
$issuedate=$_POST['idate'];

$qry=$con->prepare("INSERT INTO `issue_books`(`StudentID`, `Studentname`, `StudentMobileNo`, `Year`, `book_id`, `book_name`, `author_name`, `publication`, `issue_date`) VALUES ('$id','$sname','$mob','$yr','$bookid','$bookname','$authorname','$publication'
	,'$issuedate')");

if($qry->execute())

{
	?>
	<script>
		alert('Book Issued Successfully');
		window.open('issue.php','_self');
	</script>
<?php
}
?>



