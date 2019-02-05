<!DOCTYPE html>
<html>
<head>
  <title>Search Train</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> 
  <link rel="stylesheet" type="text/css" href="sbusstyle.css">
<body>
  <style>
    body{
      background-image: url(https://images.unsplash.com/photo-1485809885770-fefe16c8f8fb?auto=format&fit=crop&w=754&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D);
      background-repeat: no-repeat;
      background-size: cover;
    }
    table{
      max-width: 400px;
      max-height: 100px;
      table-layout:fixed;
      width: 100%;
      word-wrap: break-word;
      color:white;
    }
  </style>

    <div class="container">
      <form action="trainsearch.php" method="post" name="search">
   
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
    $result = mysqli_query($conn, "SELECT * FROM train_search" );

    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
?>


  <table class="table table-dark">
  <thead >
    <tr width="200">
      <th scope="col">Train ID</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Train Name</th>
      <th scope="col">Train Type</th>
    </tr>
    <tbody>
    


    <?php 
      if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) { ?>
    <tr>  
          <td><?php  echo $row["train_id"]  ?></td>
          <td><?php  echo $row["source"]?></td>
          <td><?php  echo $row["destination"]?></td>
          <td><?php  echo $row["train_name"] ?></td>
          <td><?php  echo $row["train_type"]?></td>
     
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