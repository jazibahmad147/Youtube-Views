
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title>Fast Views</title>
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
<!--	style.css custom file. -->
    <link rel="stylesheet" href="../style.css">
	
<!--	Icons  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body style="background-color: #F4F4F4">
	




	
	<?php
	session_start();
//	Check that user logined or not...
if(!isset($_SESSION['username'])){
	header('location:index.php');
}
	
// To Display points from usertable. 
	$username=$_SESSION['username'];
	// Connction with server.
	mysql_connect('localhost', 'root', '');
	// Selection of database.
	mysql_select_db('userregistration');
	// Selection of points from usertable.
	$sql = "SELECT * FROM usertable WHERE name='$username'";
	$result = mysql_query($sql);
	
	while($rows=mysql_fetch_assoc($result)){
		$totalpoints= $rows['points'];
		$updatepoint=$totalpoints+19;
	}
	?>

<script>
//     function hide($url){
// 			console.log($url);
// 		<?php 
// 		echo $url;
// 		// $mylink=$_POST[$url];
// 		// $_SESSION['url'] = $url;
// 		// echo "<script>console.log($url);</script>";
// 		?>
// 			// localStorage.setItem('url',);

// // 		var string = JSON.stringify($url)
// // //		console.log(string);
// // 		localStorage.setItem('url', string)

//     }
</script>

	
	
	
<!--	MENU -->
		  <nav style='margin-bottom: 20px'>
    <div class="nav-wrapper ">
      <a href="#!" class="brand-logo">Fast Views</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
		<li><a href="edit-profile.php" class="waves-effect waves-light btn modal-trigger">Edit Detail</a></li>
        <li><a href="contact-page.php" class="waves-effect waves-light btn modal-trigger">Contact us</a></li>
        <li><a href="logout.php" class="waves-effect waves-light btn modal-trigger">Logout</a></li>
      </ul>
    </div>
  </nav>
	
<!--	Side MENU   -->
  <ul class="sidenav" id="mobile-demo">
	<li><a href="edit-profile.php" class="waves-effect waves-light btn modal-trigger">Edit Detail</a></li>    
    <li><a href="contact-page.php" class="waves-effect waves-light btn modal-trigger">Contact us</a></li>
	<li><a href="logout.php" class="waves-effect waves-light btn modal-trigger">Logout</a></li>
  </ul>
	
<!--	Start Page design   -->
	<div class="row">
		<div class="container-fluid">
<!--			Points block    -->
			<div class="col m4 l2"> 
				<div style="border:2px solid black;text-align: center">
					<h4>Total Points</h4>
					<p style="font-weight: 500">
					<p id="coins">Loading...</p>
						<?php echo "<script>setTimeout(function(){
						document.getElementById('coins').innerHTML = $totalpoints
						}, 3000);</script>"?></p>
				</div>
<!--				Side Ads Block   -->
				<div style="margin-top:10px">
					<img src="media/image1.png" class="responsive-img" /><br>
<!--					<img src="media/image2.png" class="responsive-img" /><br>-->
				</div>
			</div>
			
<!--			Welcome Block     -->
			<div class="col m8 l10">
				<div style='border:2px solid black;margin-bottom:10px'>
				<h1>Welcome <?php echo $_SESSION['username']; ?></h1>		
				</div>
				
<!--				Making of Links Buttons    -->
			<div style='border:2px solid black;padding:10px 10px'>
<?php
				
				
//	Show button of entered channels in database. 
		$displayquery="SELECT * FROM usertable";
		$displayresult=mysql_query($displayquery);
		$user = $_SESSION['username'];
		while($row=mysql_fetch_array($displayresult))
		{
			$link1=$row["VideoLink1"];
			
		// echo "<div style='width=10%;display:inline-block;padding-right:20px;'>
		// <p>19 Coins</p>
		// <button class='btn btn-primary' name='insert' onclick=hide('$link1')> <a style='color: white; 'href='video-page.php' target='_blank' >Play</a> </button> 
		// </div>";

		echo "<div style='width=10%;display:inline-block;padding-right:20px;'>
		<p>19 Coins</p>
		<form action='' method='POST'>
		<button class='btn btn-primary' name='insert' value='$link1'> click me </button> 
		</form>
		</div>";


		// echo "<div style='width=10%;display:inline-block;padding-right:20px;'>
		// <p>19 Coins</p>
		// <form methode='POST' action=''>
		// <input type='submit' class='btn btn-primary' value='$link1' name='mylink' /> <a style='color: black; 'href='video-page.php' target='_blank' >Play</a> 
		// </form>
		// </div>";

	
	}
	function testfun($link1){
		echo "<script> console.log('$link1');</script>";
	}
	if(array_key_exists('insert',$_POST)){
		testfun($link1);
	}

		// session_create_id();
		// echo '<br /> Welcome to page #1';
		// $name = $_POST['insert'];
    // $_SESSION_id['url'] = $name;
		
	?>
<?php
// function testfun($link1){
// 	echo "<script> console.log('$link1');</script>";
// }
// if(array_key_exists('insert',$_POST)){
// 	testfun($link1);
// }

?>
		
				
				
				
				<script>
    $('.rbutton').on('click',function() {
        $(this).prop("disabled",true);
    });</script>
<!--				$link-->
				
				
				</div>

				
				
			</div>
		
		
		</div>
	
	</div>
	
	

	
		 <!--JavaScript at end of body for optimized loading-->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
	 // Or with jQuery

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });
	</script>
	
</body>
</html>