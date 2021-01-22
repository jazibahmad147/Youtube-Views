
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src = "http://www.youtube.com/player_api"></script>
    <title>Videos</title>
    <script src="YT-Video-Script.js"></script>
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
	
	
<!--	This query for points...    -->
	<script>
    function hide($url){
		var string = JSON.stringify($url)
//		console.log(string);
		localStorage.setItem('url', string)

    }
</script>
	
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
	
	
	
<!--	MENU -->
		  <nav style='margin-bottom: 20px'>
    <div class="nav-wrapper ">
      <a href="#!" class="brand-logo">Fast Views</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="logout.php" class="waves-effect waves-light btn modal-trigger">Logout</a></li>
        <li><a href="contact-page.php" class="waves-effect waves-light btn modal-trigger">Contact us</a></li>
      </ul>
    </div>
  </nav>
	
<!--	Side MENU   -->
  <ul class="sidenav" id="mobile-demo">
    <li><a href="logout.php" class="waves-effect waves-light btn modal-trigger">Logout</a></li>  
       <li><a href="contact-page.php" class="waves-effect waves-light btn modal-trigger">Contact us</a></li>
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
					<img src="media/image1.png" class="responsive-img" /><br />
<!--					<img src="media/image2.png" class="responsive-img" /><br>-->
				</div>
			</div>
			
<!--			Welcome Block     -->
			<div class="col m8 l10">
				<div style='border:2px solid black;margin-bottom:10px'>
				<h1>Welcome <?php echo $_SESSION['username']; ?></h1>		
				</div>
				
<!--				Making of Links Buttons    -->
			<div style='border:2px solid black; padding:10px 10px; text-align: center; margin: auto'>
<script>
	function points(){
		alert ("Adding points...");
		location.replace("score.php")
	}
	// function delpoints(){
	// 	// var link= JSON.parse(localStorage.getItem('url'));
	// 	console.log("123");
	// 	// document.write(link);
	// 	
	// }
	</script>
				<script>
				function myNew(){

				// var url = localStorage.getItem('url');
				jQuery.post('sample.php',{'mykey':'ali'},function(data){
					alert("login successfull");
				}).fail(function(){
					alert("error")
				})

					// var value = localStorage.getItem('url');
					// // console.log(value);

					// jQuery.post("sample.php", {mykey: value}, function(data){
					// 	// object.success('sample.php')
					// 	alert ("Open Example.php");
					// 	// window.location.href('sample.php')
					// 	location.replace('sample.php');
					// // console.log(data.value)
					// }).fail(function(){
					// 	alert ("error");
					// });
				}

</script>
	<?php
	// $value = "<script>localStorage.getItem('url');</script>";
	// echo "<script>console.log($value)</script>";


	
	?>



	
    <div id="player">Loading...</div>
    <br><br>
    Timer:
    <span disabled id="txt"></span>
    <!-- <button id='btn' disabled onClick='points();'>Go Next</button> -->
    <button  onClick='points();'>Check</button>
    <button  onClick='myNew();'>New Func</button>
		
				
				
				</div>

				
				
			</div>
		
		
		</div>
	
	</div>
	<?php
	function delpoints(){
		// var link= JSON.parse(localStorage.getItem('url'));
		// console.log("123");
		// document.write(link);
		
		// echo "Working...";
		echo ("<script>console.log('hello');</script>");
		
	}
	?>
	
	
	


	
	
	
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







