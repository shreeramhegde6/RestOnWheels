<!DOCTYPE html>
<html>
<head>
	<title>Seat Booking</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body><nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Rest On Wheels</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="frontpage.php" style="align-content: center;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/mybookings.php" style="align-content: center;">My Bookings</a>
      </li>
      <ul class="nav navbar-nav navbar-right">
        <li><form action="logout.php" method="post">
      <button type="submit" class="btn btn-primary btn-small" id="buttonHead" style="margin-left: 850px;">Sign Out</button></form></i></a></li>
      </ul>
    </ul>
  </div>
</nav>
<div id="demo" class="demo">
 <style type="text/css">
	#demo{
		text-align: center;
		font-size: 100%;
		font-style: bold;
		padding: 10%;
		background-image: (https://cdn.pixabay.com/photo/2017/10/02/18/19/taj-mahal-entrance-gate-2809693_960_720.jpg);
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
	}
	div{
		padding: 1%;
	}
</style>
<?php

 
$conn =  mysqli_connect("localhost","root","","mini");

$seats = $_POST['seats'];

 session_start();

$frommm = $_SESSION['frommm'];
$tooo = $_SESSION['tooo'];
$date = $_SESSION['date'];
echo "<br>".$date;
echo "  ";
echo $frommm;
echo " to ";
echo $tooo;
  /* //Read your session (if it is set)
   if (isset($_SESSION['user_name']))
      echo $_SESSION['user_name'];*/
 $sessvar=$_SESSION['user_name']; 

if($seats>5){
	echo "you can book only 5 seats at a time!!";
}
else{
	echo "You entered ", $seats , " seats\n","<br>";
	$amt = $seats*500;
	echo "The total amount = ", $amt , "only","<br>";

}


$query = "insert into train_bookdetails(amount,tot_seats,username,source,destination,date) values ($amt,$seats,'$sessvar','$frommm','$tooo','$date')";


if (mysqli_query($conn, $query)) {
	
    $last_id = mysqli_insert_id($conn);
    $_SESSION['booking_id'] = $last_id;
     

    echo "Booking Successfull, Booking ID is: " . $last_id;
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}



?>
<div>
 	<form method="get" action="busupdate.html"><input type="submit" class="btn btn-primary" value="Update" ></form>
</div>
<div>
	<form method="post" action="traindelete.php"><input type="submit" class="btn btn-primary" value="Cancel" name="cancel"></form>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>