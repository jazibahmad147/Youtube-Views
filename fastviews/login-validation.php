<!--Login Session-->
<?php

session_start();

// Connction with server.
$con = mysqli_connect('localhost', 'root', '');

// Selection of database.
mysqli_select_db($con, 'userregistration');

// Creation of variables.
$name = $_POST['user'];
$pass = $_POST['password'];


$authorize = "select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $authorize);

$num = mysqli_num_rows($result);

// Checking users name recurring.
if($num == 1){
	echo "<script>alert('Login Sucessfull.');</script>";
	$_SESSION['username'] = $name;
	header('location:home.php');
}else{
	echo "<script>alert('Incorrect Username or Password.');</script>";
	header('location:index.php');
	
}

?>