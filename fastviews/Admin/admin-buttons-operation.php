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
	$link = $_POST['channellink'];
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
			header('location:admin-home.php');

		}else{
			$query= "insert into usertable(name, email, password, ChannelName, ChannelLink, points) values ('$name', '$email', '$pass', '$channel', '$link', '$points')";
			mysqli_query($con, $query);
			echo "<script>alert('Registration Successful');</script>";
			header('location:admin-home.php');
		}

	}


// Find the data from database.
if(isset($_POST['find']))
	{
		$findquery="SELECT * FROM usertable WHERE name='$name'";
		$findresult=mysqli_query($con, $findquery);
		echo "<table border=1>";
			echo "<th>"; echo "name"; echo "</th>";
			echo "<th>"; echo "email"; echo "</th>";
			echo "<th>"; echo "password"; echo "</th>";
			echo "<th>"; echo "ChannelName"; echo "</th>";
			echo "<th>"; echo "ChannelLink"; echo "</th>";
			echo "<th>"; echo "points"; echo "</th>";
		while($row=mysqli_fetch_array($findresult))
		{
			echo "<tr>";
			echo "<td>"; echo $row["name"]; echo "</td>";
			echo "<td>"; echo $row["email"]; echo "</td>";
			echo "<td>"; echo $row["password"]; echo "</td>";
			echo "<td>"; echo $row["ChannelName"]; echo "</td>";
			echo "<td>"; echo $row["ChannelLink"]; echo "</td>";
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
			echo "<th>"; echo "name"; echo "</th>";
			echo "<th>"; echo "email"; echo "</th>";
			echo "<th>"; echo "password"; echo "</th>";
			echo "<th>"; echo "ChannelName"; echo "</th>";
			echo "<th>"; echo "ChannelLink"; echo "</th>";
			echo "<th>"; echo "points"; echo "</th>";
		while($row=mysqli_fetch_array($displayresult))
		{
			echo "<tr>";
			echo "<td>"; echo $row["name"]; echo "</td>";
			echo "<td>"; echo $row["email"]; echo "</td>";
			echo "<td>"; echo $row["password"]; echo "</td>";
			echo "<td>"; echo $row["ChannelName"]; echo "</td>";
			echo "<td>"; echo $row["ChannelLink"]; echo "</td>";
			echo "<td>"; echo $row["points"]; echo "</td>";
			echo "</tr>";
			
		}
		echo "</table>";
	
	}

// Update the data from database.
if(isset($_POST['update']))
	{
		$updatequery="UPDATE usertable SET email = '$email', password= '$pass', ChannelName= '$channel', ChannelLink= '$link', points= '$points' WHERE name='$name'";
		mysqli_query($con, $updatequery);
		header('location:admin-home.php');
	
	}

	// Delete the data from database.
if(isset($_POST['delete']))
	{
		$deletequery="DELETE FROM usertable WHERE name='$name'";
		mysqli_query($con, $deletequery);
		header('location:admin-home.php');
	
	}
	
	
	?>