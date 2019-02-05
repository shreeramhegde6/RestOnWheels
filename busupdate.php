
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>

<?php

$conn =  mysqli_connect("localhost","root","","mini");

$total_seats = $_POST['seats'];


$result = mysqli_query($conn, "SELECT MAX(booking_id) FROM bus_bookdetails");

$row = mysqli_fetch_array($result);

$last_seat =  $row[0];




$query = "UPDATE bus_bookdetails SET amount = 500 * $total_seats,tot_seats = $total_seats WHERE booking_id = $last_seat" ;


$result1 = mysqli_query($conn, $query);

?>

Last booking was updated Successfully
<a href="http://www.animateit.net"> <img src="http://www.animateit.net/data/media/192/acc004.gif" border="0" alt="Green Check Mark from AnimateIt.net" /> </a>
<style type="text/css">
	body{
		padding-top: 10%;
		font-family: 'Open Sans', sans-serif; 
		text-align: center;
		
  </style>
</style>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>