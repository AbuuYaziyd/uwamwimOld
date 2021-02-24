<?php
	session_start();
	$con = mysqli_connect('localhost', 'root', '', 'uwam');

	// Login Admin
	if (isset($_POST['alogin'])) {
		$username = mysqli_real_escape_string($con,$_POST['email']);
		$password = mysqli_real_escape_string($con,$_POST['apassword']);
		$query = "SELECT * FROM admn WHERE email='$username' AND password='$password'";
		$result = mysqli_query($con, $query);

		// Error Handler
		if (empty($username) || empty($password)) {
			header('location: ./login.php?error=emptyfields');
			exit();
		}

		if (mysqli_num_rows($result) == 1) {
			//login
			$_SESSION['email'] = $username;
			//redirecting to admin-panel
			header('admin/admn-reg.php'); 
		}else{
			echo "Error!";
			exit();
		}
	}
