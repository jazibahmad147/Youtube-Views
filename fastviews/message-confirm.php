<?php
	
	session_start();
	
	$servername="localhost";
	$serveruser="root";
	$dbname="userregistration";
	$con = mysqli_connect($servername, $serveruser, '');
	mysqli_select_db($con, $dbname);

	
	$name=$_POST['user'];
	$email=$_POST['email'];
	$message=$_POST['message'];

echo $name."<br>".$email;
	// Selection of points from usertable.
	$sql = "SELECT * FROM messages";
	mysqli_query($con, $sql);
	
    $messagequery = "insert into messages(name, email, message) values ('$name', '$email', '$message')";
	$check = mysqli_query($con, $messagequery);
	mysqli_query($con, $messagequery);
if($check){
	echo "<script>alert('Message sent...')</script>";
}
else{
	echo "<script>alert('Error in sending your message...')</script>";
}
	header('location:contact-page.php');
	
	?>