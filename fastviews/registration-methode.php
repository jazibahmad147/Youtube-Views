<?php

// Query for creating index with auto-increment...
// ALTER TABLE usertable ADD Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST

session_start();
//header('location:login-form.php');

// Connction with server.

$servername="localhost";
$serveruser="root";
$dbname="userregistration";
$con = mysqli_connect($servername, $serveruser, '');

// Selection of database.
mysqli_select_db($con, $dbname);

// Creation of variables.
$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];
$channel = $_POST['channelname'];
$vieolink1 = $_POST['videolink1'];
// $vieolink2 = $_POST['videolink2'];
// $vieolink3 = $_POST['videolink3'];
// $vieolink4 = $_POST['videolink4'];
// $vieolink5 = $_POST['videolink5'];
// $vieolink6 = $_POST['videolink6'];
// $vieolink7 = $_POST['videolink7'];
// $vieolink8 = $_POST['videolink8'];
// $vieolink9 = $_POST['videolink9'];
// $vieolink10 = $_POST['videolink10'];

// Checking users name recurring.
$check = "select * from usertable where name = '$name'";

$result = mysqli_query($con, $check);

$num = mysqli_num_rows($result);


if($num == 1){
	echo "<script>alert('Username is Already Taken.');</script>";
	header('location:registration-form.php');
	
}else{
	$query= "insert into usertable(name, email, password, ChannelName, VideoLink1) 
	values ('$name', '$email', '$pass', '$channel', '$vieolink1')";
	$register = mysqli_query($con, $query);
	if($register){
		echo "<script>alert('Registeration Succesfull...')</script>";
		// header('location:index.php');
	}
	else{
		echo "<script>alert('Failed to Registeration...')</script>";
		// header('location:index.php');
	}
	
}

?>
