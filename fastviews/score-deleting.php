
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<div id="linkvideo"></div>

<script>
////	function myfunc(){
////	alert (JSON.parse(localStorage.getItem('url')));
//	var $link= JSON.parse(localStorage.getItem('url'));
////	console.log($link);
//		document.write($link)
////	}

// php in script
// document.getElementById('linkvideo').innerHTML = ''

</script>

<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:login-form.php');
	
}else{
echo "jazib";

// $mynewlink = $_POST['mylink'];
// echo $mynewlink;
echo "<br />".$_SESSION['url']; // url


// To Display points from usertable. 
	$user=$_SESSION['username'];
	// Connction with server.
	mysql_connect('localhost', 'root', '');
	// Selection of database.
	mysql_select_db('userregistration');
	
	// $link = "<script>var link= JSON.parse(localStorage.getItem('url'));
	// 			document.getElementById('linkvideo').innerHTML=link;</script>";
	$link = "<script>JSON.parse(localStorage.getItem('url'));</script>";
	$NewLink = "<script>document.getElementById('linkvideo').innerHTML = $link</script>";
	// echo $link."<br>";
	echo $NewLink;

	// Selection of points from usertable.
	$sql = "SELECT * FROM usertable WHERE VideoLink1 = '$NewLink'";
	$result = mysql_query($sql);
	
	while($rows=mysql_fetch_assoc($result)){
        $totalpoints= $rows['points'];
        // echo " ".$totalpoints ."<br>";
    }
    
	// 	$newaddpoints=$totalpoints+20;
	// 	$delcoin=$totalpoints-20;
	

    // $addpoints = "UPDATE usertable SET points = '$newaddpoints' WHERE name = '$user'";
    // mysql_query($addpoints);
	// header('location:home.php');	

// // Deleting of points
// 	$sql2 = "SELECT * FROM usertable WHERE VideoLink1 = '$link'";
// 	$result2 = mysql_query($sql2);
	
// 	while($row=mysql_fetch_assoc($result2)){
// 		$previouspoints = $row['points'];
// 		// $previouspoints = 20;
		
// 	}
// 	$deletepoints = "UPDATE usertable SET points = '$delcoin' WHERE ChannelLink = '$link'";
// 	mysql_query($deletepoints);


// 		echo "<br>".$previouspoints;

}

?>


</body>
</html>