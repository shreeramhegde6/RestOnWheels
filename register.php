<?php
session_start();

$conn = mysqli_connect("localhost","root","","mini");
if(!$conn){
	die("Error in connection");
}

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$usrname = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$_SESSION['user_name']=$usrname;


echo "before query";
$query = "INSERT into userdata (firstname,lastname,username,email,password) VALUES ('$fname','$lname','$usrname','$email','$password')";
echo "after";
mysqli_query($conn,$query) or die('Insert error');

		
header("location:frontpage.php");
echo "reached here";



?>