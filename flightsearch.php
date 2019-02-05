<!DOCTYPE html>
<html>
<head>
	<title>Flight Results</title>
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
$_SESSION['fromm'] = $source;
$_SESSION['too'] = $destination;
echo "<br>Departure: ".$source. "<br>Arrival: ".$destination;


$query = "SELECT * FROM `flight_search` where departure=\"$source\" and arrival=\"$destination\"";

$result = $conn -> query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>Flight id: ". $row["flight_id"]. " - Flight Name: ". $row["flight_name"]. " Flight Type: " . $row["flight_type"] . "<br>" ."<a href='flightseatbooking.html'> \n ", "<input type='submit' value='BOOK'>", "</a>", "<br>";;
    }
} else {
    echo "0 results";
}


$conn -> close();
?>
</body>
</html>