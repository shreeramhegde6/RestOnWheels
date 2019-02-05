<!DOCTYPE html>
<html>
<head>
  <title>Search bus</title>

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> 
  <link rel="stylesheet" type="text/css" href="sbusstyle.css">
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous"></script>
</head>
<body>
  <style>
    body{
      background-image: url(https://images.unsplash.com/photo-1485809885770-fefe16c8f8fb?auto=format&fit=crop&w=754&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D);
      background-repeat: no-repeat;
      background-size: cover;
    }
    table{
      margin: [5%,5%,5%,5%];
      color:white;
    }
  </style>

    <div class="container">
      <form action="busresults.php" method="post" name="search">
   
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
          
            <input type="date"  name= "date" id="txtdate" class="form-control" placeholder="Date" aria-label="Date">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button" disabled>Date</button>
            </span>
            </input>
          </div>
        </div>
      </div>
      <script language="javascript">
              $(document).ready(function () {
                  var minDate = new Date();
                  $("#txtdate").datepicker({
                      showAnim:'drop',
                      numberOfMonth:1,
                      minDate:minDate,
                      dateFormat:'dd/mm/yy';
                  });
              });
</script>
          
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
    $result = mysqli_query($conn, "SELECT * FROM bus_search" );

    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }

    // session_start();
    // $new_date = date('Y-m-d', strtotime($_POST['search']));
    // echo $new_date;
?>


  <table class="table table-dark">
  <thead >
    <tr>
      <th scope="col">Bus ID</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Bus Name</th>
      <th scope="col">Bus Type</th>
    </tr>
    <tbody>
    


    <?php 
      if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) { ?>
    <tr>  
          <td><?php  echo $row["bus_id"]  ?></td>
          <td><?php  echo $row["source"]?></td>
          <td><?php  echo $row["destination"]?></td>
          <td><?php  echo $row["bus_name"] ?></td>
          <td><?php  echo $row["bus_type"]?></td>
     
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