<?php

session_start();


// Connction with server.
$con = mysqli_connect('localhost', 'root', '');

// Selection of database.
mysqli_select_db($con, 'userregistration');

// Creation of variables.
$name = $_POST['user'];
$pass = $_POST['password'];


$s = "SELECT * FROM admin WHERE name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

// Checking users name recurring.
if($num == 1){
	$_SESSION['username'] = $name;
	header('location:admin-home.php');
}else{
	echo "Incorrect username or password.";
	header('location:admin-login-form.php');
}

?>