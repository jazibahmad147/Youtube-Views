
<script>
////	function myfunc(){
////	alert (JSON.parse(localStorage.getItem('url')));
//	var $link= JSON.parse(localStorage.getItem('url'));
////	console.log($link);
//		document.write($link)
////	}

</script>

<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:login-form.php');
	
}

// To Display points from usertable. 
	$user=$_SESSION['username'];
	// Connction with server.
	mysql_connect('localhost', 'root', '');
	// Selection of database.
	mysql_select_db('userregistration');
	
	$link = "<script>var link= JSON.parse(localStorage.getItem('url'));
				document.write(link);</script>";
	echo $link;

	// Selection of points from usertable.
	$sql = "SELECT * FROM usertable WHERE name='$user'";
	$result = mysql_query($sql);
	
	while($rows=mysql_fetch_assoc($result)){
		$totalpoints= $rows['points'];
	}
		$newaddpoints=$totalpoints+20;
		$delcoin=$totalpoints-20;
	

    $addpoints = "UPDATE usertable SET points = '$newaddpoints' WHERE name = '$user'";
    mysql_query($addpoints);
	header('location:home.php');
	
    // echo "<br />".$_SESSION['url']; // url

// // Deleting of points
// 	$sql2 = "SELECT * FROM usertable WHERE VideoLink1 = '$link'";
// 	$result2 = mysql_query($sql2);
	
// 	while($row=mysql_fetch_assoc($result2)){
// 		$previouspoints = $row['points'];
// 		// $previouspoints = 20;
		
// 	}
// 	$deletepoints = "UPDATE usertable SET points = '$delcoin' WHERE VideoLink1 = '$link'";
// 	mysql_query($deletepoints);


// 		echo "<br>".$previouspoints;



?>
	