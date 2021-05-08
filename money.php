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
		</nav>
		<div class="container">
		<p class="h3 m-4">Transfer money</p>
		<form class="text-center border border-light p-5" action="moneytransfer.php" method="get">
		<div class="row">
<div class="col-md-6">
<p class="h3 mb-4">Sender</p>
    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="firstname" name="firstname1" required>
    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="lastname" name="lastname1" required>
    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Accountno" name="accountno1" required>
    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Amount" name="amount" required>
    </div>
     <div class= col-md-6>

<p class="h3 mb-4">Reciever</p>
    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="firstname" name="firstname2" required>
    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="lastname" name="lastname2" required>
    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Accountno" name="accountno2"required>

    </div>

<button class="btn btn-info my-4" type="Transfer" onclick="fun()">confirm transfer</button>
<button class="btn btn-danger m-4 my-4" type="Transfer">cancel</button>
</div>
</form>';


