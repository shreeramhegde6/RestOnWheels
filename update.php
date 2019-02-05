
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>

<?php

$conn =  mysqli_connect("localhost","root","","mini");

$total_seats = $_POST['seats'];


$result = mysqli_query($conn, "SELECT MAX(booking_id) FROM user_input");

$row = mysqli_fetch_array($result);

$last_seat =  $row[0];




$query = "UPDATE user_input SET amount = 500 * $total_seats,tot_seats = $total_seats WHERE booking_id = $last_seat" ;


$result1 = mysqli_query($conn, $query);

?>
<b>Last booking was updated Successfully</b>
</body>
</html>