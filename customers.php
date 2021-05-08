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
					<a class="nav-link" href="money.php">Money Transfer</a>
				</li>
			</ul>
		</nav>';

		$sql="select*from user";
		$result=mysqli_query($conn,$sql);
		echo '<div class="container"><table class="table table-light table-hover table-bordered  m-5 ">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Firstname</th>
      <th scope="col">Lastmane</th>
      <th scope="col">Accountno </th>
      <th scope="col">Balance</th>
      <th scope="col">send money</th>
    </tr>
  </thead>';
		while($rows=mysqli_fetch_assoc($result))
		{
			echo '<tbody>
    <tr>
      <td>'.$rows['firstname'].'</td>
      <td>'.$rows['lastname'].'</td>
      <td>'.$rows['accountno'].'</td>
      <td>'.$rows['balance'].'</td>
      <td><a href="money.php"><button class="btn btn-success ">send money</button></a></td>
    </tr>
    ';
		}	




?>
