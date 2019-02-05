<!DOCTYPE html>
<html>
<head>
	<title>Book Seats</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<?php

$conn = mysqli_connect("localhost","root","password","mini");

$seats = $_POST['seats'];

if($seats>5){
	echo "you can book only 5 seats at a time!!";
}
else{
	echo "You entered ", $seats , " seats\n","<br>";
	$amt = $seats*500;
	echo "The total amount = ", $amt , "only","<br>";
}

$query = "insert into user_input(amount,tot_seats) values ($amt,$seats)";
echo "working";
mysqli_query($conn,$query);
?>
<style type="text/css">
	body{
		text-align: center;
		font-size: 100%;
		font-style: bold;
		padding: 10%;
		background-image: url(https://images.unsplash.com/photo-1500111709600-7761aa8216c7?auto=format&fit=crop&w=750&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D);
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
	}
	div{
		padding: 1%;
	}
</style>	
<div>
 <form method="get" action="update.html"><input type="submit" class="btn btn-primary" value="Update" ></form>
</div>
<div>
<form method="post" action="delete.php"><input type="submit" class="btn btn-primary" value="Cancel" name="cancel"></form>
</div>
</body>
</html>
