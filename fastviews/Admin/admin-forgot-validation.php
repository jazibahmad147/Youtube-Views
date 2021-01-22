<?php

session_start();
//header('location:admin-login-form.php');

// Connction with server.
$con = mysqli_connect('localhost', 'root', '');

// Selection of database.
mysqli_select_db($con, 'userregistration');

// Creation of variables.
$name = $_POST['user'];
$email = $_POST['email'];
$newpass = $_POST['newpass'];

	$reg= "UPDATE admin SET password = '$newpass' WHERE name = '$name' && email = '$email'";
	mysqli_query($con, $reg);
	echo "<script>alert('Update Successful');</script>";
	header('location:admin-login-form.php');


?>