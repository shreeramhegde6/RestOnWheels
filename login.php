<?php
session_start();
if (isset($_POST['submit'])) {
$conn = mysqli_connect("localhost","root","","mini");
if(!$conn){
	die("Error in connection");
}

      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT username,password FROM userdata WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         $_SESSION['user_name'] = $myusername;
         
         header("location: frontpage.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
}
?>