<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rolling Channel Links</title>
</head>
<body>

    <?php
    session_start();
    //	Check that user logined or not...
    if(!isset($_SESSION['username'])){
        header('location:index.php');
    }

    $username=$_SESSION['username'];
    // echo $username;

    
	// Connction with server.
	mysql_connect('localhost', 'root', '');
	// Selection of database.
	mysql_select_db('userregistration');
	// Selection of link from usertable.
	$sql = "SELECT * FROM usertable WHERE name='$username'";
	$result = mysql_query($sql);
	while($rows=mysql_fetch_assoc($result)){
        $link= $rows['VideoLink1'];
        echo $link;	
    }
    

    
    
    ?>
    
    
    
    




</body>
</html>