<?php
include('../../dbcon.php');

$bid=$_POST['bookid'];
$bname=$_POST['bookname'];
$aname=$_POST['athname'];
$pbn=$_POST['pbn'];
$pch=$_POST['prch'];

$qry= $con->prepare("INSERT INTO `books`(`book_id`, `book_name`, `author_name`,`publication`,`purchase_date`) VALUES ('$bid','$bname','$aname','$pbn','$pch')");

if($qry->execute())
{
	?>
	<script>
		alert('Book Added Successfully');
		window.open('adbook.php','_self');
	</script>
<?php
}
?>


