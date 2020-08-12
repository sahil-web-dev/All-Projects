<html>
<head>
	<title>Seacrh Book</title>
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
				<li><a href="../library.php">Back To Library</a></li>
			</ul>
		</nav>
	</header>
	<h3>BOOKS AVAILABEL</h3><br/><br/>
	<table align="center" width="100%" border="1" style="margin-top: 10px;color:black; text-align: center;">
			<tr>
				<th>Book ID</th>
				<th>Book Name</th>
				<th>Author Name</th>
				<th>Publication</th>
			</tr>
	<?php 
	include('../../dbcon.php');

	$bnm=$_POST['bname'];
	$sql="SELECT * FROM books WHERE book_name LIKE '$bnm%'";
	$run=mysqli_query($con,$sql);
	if(mysqli_num_rows($run)<1)
		{
		?>
		<script>
		alert('NO SUCH BOOK AVAILABLE');
		window.open('../library.php','_self');
		</script>
		<?php
	}
	else
	{
		while($data=mysqli_fetch_assoc($run))
			{
			?>
			<tr>
				<td><?php echo $data['book_id']?></td>
				<td><?php echo $data['book_name']?></td>
				<td><?php echo $data['author_name']?></td>
				<td><?php echo $data['publication']?></td>
			</tr>
			<?php
		}
	}
	?>
</table>