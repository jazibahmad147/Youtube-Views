<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title>Dashboard</title>
</head>
<body>
	<!--Logout Button-->
	<input type="button" value="Logout" onclick="window.location.href='admin-logout.php'" />
	<br><br>
	<table border="1px solid gray">
	<form action="" method="post">
	<tr><th colspan="2">Form</th></tr>
		<tr><td>User Name: </td><td><input type="text" name="user"></td></tr>
		<tr><td>Email: </td><td><input type="email" name="email"></td></tr>
		<tr><td>Password: </td><td><input type="password" name="password"></td></tr>
		<tr><td>Channel Name: </td><td><input type="text" name="channelname"></td></tr>
		<tr><td>Video Link1: </td><td><input type="text" name="videolink1"></td></tr>
		<tr><td>Coins: </td><td><input type="text" name="coins"><br></td></tr>
		</table><br>
		<button type="submit" name="submit" class="btn btn-primary">Register</button>
		<button type="submit" name="find" class="btn btn-primary">Find</button>
		<button type="submit" name="display" class="btn btn-primary">Display</button>
		<button type="submit" name="update" class="btn btn-primary">Update</button>
		<button type="submit" name="delete" class="btn btn-primary">Delete</button>
		
	</form>
	<hr><br>
	
	
</body>
</html>

<?php

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
	$link = $_POST['videolink1'];
	$points = $_POST['coins'];

	// Register data into database.
	if(isset($_POST['submit']))
	{
		
		// Checking users name recurring.
		$check = "select * from usertable where name = '$name'";

		$result = mysqli_query($con, $check);

		$num = mysqli_num_rows($result);


		if($num == 1){
			echo "<script>alert('Username is Already Taken.');</script>";
//			header('location:admin-home.php');

		}else{
			$query= "insert into usertable(name, email, password, ChannelName, VideoLink1, points) 
			values ('$name', '$email', '$pass', '$channel', '$link', '$points')";
			mysqli_query($con, $query);
			echo "<script>alert('Registration Successful');</script>";
//			header('location:admin-home.php');
		}

	}


// Find the data from database.
if(isset($_POST['find']))
	{
		$findquery="SELECT * FROM usertable WHERE name='$name'";
		$findresult=mysqli_query($con, $findquery);
		echo "<table border=1>";
			echo "<th>"; echo "Id"; echo "</th>";
			echo "<th>"; echo "name"; echo "</th>";
			echo "<th>"; echo "email"; echo "</th>";
			echo "<th>"; echo "password"; echo "</th>";
			echo "<th>"; echo "ChannelName"; echo "</th>";
			echo "<th>"; echo "VideoLink1"; echo "</th>";
			echo "<th>"; echo "points"; echo "</th>";
		while($row=mysqli_fetch_array($findresult))
		{
			echo "<tr>";
			echo "<td>"; echo $row["Id"]; echo "</td>";
			echo "<td>"; echo $row["name"]; echo "</td>";
			echo "<td>"; echo $row["email"]; echo "</td>";
			echo "<td>"; echo $row["password"]; echo "</td>";
			echo "<td>"; echo $row["ChannelName"]; echo "</td>";
			echo "<td>"; echo $row["VideoLink1"]; echo "</td>";
			echo "<td>"; echo $row["points"]; echo "</td>";
			echo "</tr>";
			
		}
		echo "</table>";
	
	}

// Display full database.
if(isset($_POST['display']))
	{
		$displayquery="SELECT * FROM usertable";
		$displayresult=mysqli_query($con, $displayquery);
		echo "<table border=1>";
			echo "<th>"; echo "Id"; echo "</th>";
			echo "<th>"; echo "name"; echo "</th>";
			echo "<th>"; echo "email"; echo "</th>";
			echo "<th>"; echo "password"; echo "</th>";
			echo "<th>"; echo "ChannelName"; echo "</th>";
			echo "<th>"; echo "VideoLink1"; echo "</th>";
			echo "<th>"; echo "points"; echo "</th>";
		while($row=mysqli_fetch_array($displayresult))
		{
			echo "<tr>";
			echo "<td>"; echo $row["Id"]; echo "</td>";
			echo "<td>"; echo $row["name"]; echo "</td>";
			echo "<td>"; echo $row["email"]; echo "</td>";
			echo "<td>"; echo $row["password"]; echo "</td>";
			echo "<td>"; echo $row["ChannelName"]; echo "</td>";
			echo "<td>"; echo $row["VideoLink1"]; echo "</td>";
			echo "<td>"; echo $row["points"]; echo "</td>";
			echo "</tr>";
			
		}
		echo "</table>";
	
	}

// Update the data from database.
if(isset($_POST['update']))
	{
		$updatequery="UPDATE usertable SET email = '$email', password= '$pass', ChannelName= '$channel', VideoLink1= '$link', points= '$points' WHERE name='$name'";
		mysqli_query($con, $updatequery);
		echo "<script>alert('Update Successful');</script>";
//		header('location:admin-home.php');
	
	}

	// Delete the data from database.
if(isset($_POST['delete']))
	{
		$deletequery="DELETE FROM usertable WHERE name='$name'";
		mysqli_query($con, $deletequery);
		echo "<script>alert('Delete Successful');</script>";
//		header('location:admin-home.php');
	
	}
	
	
	?>
	