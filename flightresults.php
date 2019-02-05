<!DOCTYPE html>
<html>
<head>
  <title>Search bus</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> 
  <link rel="stylesheet" type="text/css" href="sbusstyle.css">
<body>
  </form>
  <style>
    body{
      background-image: url(https://images.unsplash.com/photo-1485809885770-fefe16c8f8fb?auto=format&fit=crop&w=754&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D);
      background-repeat: no-repeat;
      background-size: cover;
      color: red;
    }
    table{
      color: white;
    }
    
    </style>

     </div>
     <div class="container">
      <form action="flightsearch.php" method="post" name="search">
   
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="input-group">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button" disabled>From</button>
            </span>
            <input type="text" name="source" class="form-control" placeholder="Leaving from..." aria-label="Search for...">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="input-group">
            <input type="text"  name="destination" class="form-control" placeholder="Destination..." aria-label="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button" disabled>To</button>
            </span>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="input-group">
            <input type="date" name="date" class="form-control" placeholder="Date" aria-label="Date">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button" disabled>Date</button>
            </span>
          </div>
        </div>
      </div>
    
      
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="input-group search-button">
            <input type="submit" name="search" class="btn btn-primary btn-lg" value="Search">
            
            </div>
          </div>
        </div>
      </form>
      
  </div>


  <<?php  $conn =  mysqli_connect("localhost","root","","mini");
    $result = mysqli_query($conn, "SELECT * FROM flight_search" );

    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
?>


  <table class="table table-dark">
  <thead >
    <tr>
      <th scope="col">Flight ID</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Flight Name</th>
      <th scope="col">Flight Type</th>
    </tr>
    <tbody>
    


    <?php 
      if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) { ?>
    <tr>  
          <td><?php  echo $row["flight_id"]  ?></td>
          <td><?php  echo $row["departure"]?></td>
          <td><?php  echo $row["arrival"]?></td>
          <td><?php  echo $row["flight_name"] ?></td>
          <td><?php  echo $row["flight_type"]?></td>
     
    </tr>
<?php
      
    }
  } else {  ?>

<p> <?php   echo "0 results"; ?></p>
<?php }

  $conn->close();
?> 


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>