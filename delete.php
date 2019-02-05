<!DOCTYPE html>
<html>
<head>
  <title>Bus Canc</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> 
  <link rel="stylesheet" type="text/css" href="sbusstyle.css">
</head>
<body>

	<style type="text/css">
		p{
			text-align: center;
			font-family:  Arial, Helvetica, sans-serif;
		}
	</style>

<?php
$conn = mysqli_connect("localhost","root","","mini");
session_start(); 
\\ $name = $_POST['seats'];

$last_id = $_SESSION['booking_id'];

//print_r($_SESSION["booking_id"]);
$query = "DELETE FROM bus_bookdetails WHERE booking_id = $last_id";
// $query = "DELETE FROM user_input ORDER BY booking_id = DESC LIMIT 1";

# $query = "delete from user_input where booking_id=52";

mysqli_query($conn,$query);	?>
<p><?php echo "Last transaction was cancelled successfully";?></p>	
</body>
</html>