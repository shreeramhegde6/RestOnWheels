<?php

session_start();

if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['username']);
	$pwd = mysqli_real_escape_string($conn, $_POST['password']);

	//Error handlers
	//Check if inputs are empty
	if (empty($uid) || empty($pwd)) {
		header("Location: ../index.php?login=empty");
		$_SESSION['errors'] = array("Your username or password was incorrect.");
		exit();
	} else {
		$sql = "SELECT * FROM userdata WHERE uname='$uid' OR email='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			$_SESSION['errors'] = array("Your username or password was incorrect.");
			header("Location: ../index.php?login=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing the password
				$hashedPwdCheck = password_verify($pwd, $row['pwd']);
				if ($hashedPwdCheck == false) {
					$_SESSION['errors'] = array("Your username or password was incorrect.");
					header("Location: ../index.php?login=error");
					exit();
				} elseif ($hashedPwdCheck == true) {
					//Log in the user here
					$_SESSION['u_id'] = $row['id'];
					$_SESSION['u_first'] = $row['fname'];
					$_SESSION['u_last'] = $row['lname'];
					$_SESSION['age'] = $row['age'];
					$_SESSION['phone'] = $row['phone'];
					$_SESSION['u_email'] = $row['email'];
					$_SESSION['u_uid'] = $row['uname'];
					header("Location: ../second.php?login=success");
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../index.php?login=error");
	$_SESSION['errors'] = array("Your username or password was incorrect.");
	exit();
}