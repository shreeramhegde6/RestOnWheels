<?php
		session_start();
		//echo $_SESSION['user_name'];
		$user = $_SESSION['user_name'];
		$conn =  mysqli_connect("localhost","root","","mini");

		// $result = mysqli_query($conn, "SELECT DISTINCT booking_id FROM bus_bookdetails WHERE username = '$user'");
		$result = mysqli_query($conn, "SELECT * FROM bus_bookdetails where username = '$user'" );
		$resultTrain =  mysqli_query($conn, "SELECT * FROM train_bookdetails where username = '$user'" );
		$resultFlight = mysqli_query($conn, "SELECT * FROM flight_bookdetails where username = '$user'" );
		if (!$result) {
    		printf("Error: %s\n", mysqli_error($conn));
    		exit();
		}
		if (!$resultTrain) {
    		printf("Error: %s\n", mysqli_error($conn));
    		exit();
		}
		if (!$resultFlight) {
    		printf("Error: %s\n", mysqli_error($conn));
    		exit();
		}
?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>My Bookings</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
		<h1><?php echo $user." ,Have a look at your Bookings"?></h1>
		<style type="text/css">
			h1{
				text-align: center;
			}
			table{
				margin: 10px;
				margin-right: 10px;
				marker-end: 10px;
				padding: 10px;
			}
		</style>
		<h1>Bus bookings</h1>
	
	
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Amount</th>
      <th scope="col">Total Seats</th>
      <th scope="col">Booking Id</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Date</th>
    </tr>
    <tbody>
    


    <?php 
    	if ($result->num_rows > 0) {
    	 while($row = $result->fetch_assoc()) { ?>
    <tr>  
      		<td><?php  echo $row["amount"]  ?></td>
      		<td><?php  echo $row["tot_seats"]?></td>
      		<td><?php  echo $row["booking_id"]?></td>
      		<td><?php  echo $row["source"] ?></td>
      		<td><?php  echo $row["destination"]?></td>
     		<td><?php echo $row["date"];?></td>
    </tr>
<?php
      
    }
	} else {	?>

<p> <?php   echo "0 results";	?></p>
<?php	}

 
?> 
	
<table class="table">
  <thead class="thead-dark">
    <tr>
    	<h1>Train Bookings</h1>
      <th scope="col">Amount</th>
      <th scope="col">Total Seats</th>
      <th scope="col">Booking Id</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Date</th>
    </tr>
    <tbody>
    


    <?php 
    	if ($resultTrain->num_rows > 0) {
    	 while($row = $resultTrain->fetch_assoc()) { ?>
    <tr>  
      		<td><?php  echo $row["amount"]  ?></td>
      		<td><?php  echo $row["tot_seats"]?></td>
      		<td><?php  echo $row["booking_id"]?></td>
      		<td><?php  echo $row["source"] ?></td>
      		<td><?php  echo $row["destination"]?></td>
     	  <td><?php echo $row["date"];?></td> --> -->
    </tr>
<?php
      
    }
	} else {	?>

<p> <?php   echo "0 results";	?></p>
<?php	}

 
?> 
<table class="table">
  <thead class="thead-dark">
    <tr>
      <h1>flight Bookings</h1>
      <th scope="col">Amount</th>
      <th scope="col">Total Seats</th>
      <th scope="col">Booking Id</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Date</th>
    </tr>
    <tbody>
    


    <?php 
      if ($resultFlight->num_rows > 0) {
       while($row = $resultFlight->fetch_assoc()) { ?>
    <tr>  
          <td><?php  echo $row["amount"]  ?></td>
          <td><?php  echo $row["tot_seats"]?></td>
          <td><?php  echo $row["booking_id"]?></td>
          <td><?php  echo $row["source"] ?></td>
          <td><?php  echo $row["destination"]?></td>
        <td><?php echo $row["date"];?></td> --> -->
    </tr>
<?php
      
    }
  } else {  ?>

<p> <?php   echo "0 results"; ?></p>
<?php }

 
?> 



  </body>
</html>


<!-- <?  $conn->close();?> -->