<!DOCTYPE html>
<html>
<head>
	<title>BUS RESULTS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
	<style>
		body{
			text-align: center;
			background-image: url(http://2.bp.blogspot.com/-wNhwbn3lcB4/VPkvqlT5OeI/AAAAAAAAIX4/ixtwvqtYMew/s1600/Belur18.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			font-family: 'Open Sans', sans-serif; 
			color: white;
		
		}
	</style>
<?php
$conn =  mysqli_connect("localhost","root","","mini");
if(!$conn){
	die("Error in connection");
}

session_start();

$source = $_POST['source'];
$destination = $_POST['destination'];
$date = $_POST['date'];
echo $date;
$_SESSION['date'] = $date;
$_SESSION['from'] = $source;
$_SESSION['to'] = $destination;
?>
<strong> <?php echo "<br>From: ". $source. "<br>To: ".$destination; ?></strong>

<!-- //$query = "select bus_id,bus_name,bus_type from bus_search"; -->
<?php
$query = "SELECT * FROM `bus_search` where source=\"$source\" and destination=\"$destination\"";

$result = $conn -> query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>Name: ". $row["bus_name"]. " 		" . $row["bus_type"] . "<a href='busseatbooking.html'> \n ", "<input type='submit' value='BOOK'>", "</a>", "<br>";
    }
} else {
    echo "0 results";
}


$conn -> close();

   //Read your session (if it is set)
   if (isset($_SESSION['user_name']))
      echo  $_SESSION['user_name'];
?>
</body>
</html>