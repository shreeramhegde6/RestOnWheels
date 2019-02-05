<?php
	$username = "";
	$email    = "";
	$db = mysqli_connect("localhost","root","","mini");
	$errors = array(); 

	if (isset($_POST['register'])) {
		$username = mysql_real_escape_string($_POST['username']);
		$email = mysql_real_escape_string($_POST['email']);
		$password_1 = mysql_real_escape_string($_POST['password_1']);
		$password_2 = mysql_real_escape_string($_POST['password_2']);

		if (empty($username)) {
			array_push($errors,"Username is required");
		}
		if (empty($email)) {
			# code...
			array_push($errors,"Email is required");
		}
		if (empty($password_1)) {
			# code...
			array_push($errors,"Password is required");
		}
		if (empty($email)) {
			# code...
			array_push($errors,"Password   is required");
		}
		if ($password_1!=password_2) {
			# code...
			array_push($errors,"The two passwords do not match");
		}
		if (count($errors)==0) {
			# code...
			$password = md5($password_1);
			$sql =   "INSERT INTO users (username,email,password)
						VALUES ('$username','$email','$password')"; 
		}

	}