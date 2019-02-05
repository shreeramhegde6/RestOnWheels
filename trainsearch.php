
<!DOCTYPE html>
<html>
<head>
	<title>train result</title>
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
$_SESSION['frommm'] = $source;
$_SESSION['tooo'] = $destination;
echo "<br>Source: ".$source. "<br>Destination: ".$destination;


$query = "SELECT * FROM `train_search` where Source=\"$source\" and destination=\"$destination\"";

$result = $conn -> query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>train id: ". $row["train_id"]. " - train Name: ". $row["train_name"]. " train Type: " . $row["train_type"] . "<br>" ."<a href='trainseatbooking.html'> \n ", "<input type='submit' value='BOOK'>", "</a>", "<br>";;
    }
} else {
    echo "0 results";
}


$conn -> close();
?>
</body>
</html>