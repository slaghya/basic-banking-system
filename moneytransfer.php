<?php
include 'connection.php';
 
echo '<html>
<head>
    <meta charset="utf-8"/>
    <title>The Sparks bank</title>
    <link rel="stylesheet" href="style.css"/>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<script>
function fun()
{
alert("Are you sure you want to transfer money to this account");
}
</script>
	<div  id="con1">
		<h1> THE SPARK BANK</h1>
		<nav class="navbar navbar-expand-sm bg-dark">
			<ul class= "navbar-nav ">
				<li class="nav-item ">
					<a class="nav-link" href="home.html">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="customers.php">Customers</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Money Transfer</a>
				</li>
			</ul>
		</nav>';
		$sql="update user set balance=balance+".$_REQUEST['amount']." where accountno=".$_REQUEST['accountno2']."";
		if (mysqli_query($conn, $sql)) {
 echo "<div class='container'><h1 class='mt-5'>Money Transferred Successfully</h1>";
} else {
 echo "Error updating record: " . mysqli_error($conn);
}
$sql1="update user set balance=balance-".$_REQUEST['amount']." where accountno=".$_REQUEST['accountno1']."";
		if (mysqli_query($conn, $sql1)) {
 echo "</a href='home.html'><button class='btn btn-success'>go back</button></a>";
} else {
 echo "Error updating record: " . mysqli_error($conn);
}


		