<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fast YT Views</title>
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
<!--	style.css custom file. -->
    <link rel="stylesheet" href="style.css">
	
<!--	Icons  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	
<!--	Menu -->
	  <nav>
    <div class="nav-wrapper ">
      <a href="#" class="brand-logo">Fast Views</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="RollingChannelLinks.php" class="waves-effect waves-light btn modal-trigger">Roll</a></li>
        <li><a href="#modal1" class="waves-effect waves-light btn modal-trigger">Login</a></li>
        <li><a href="#modal2" class="waves-effect waves-light btn modal-trigger">Create Account</a></li>
		<li><a href="contact-page.php" class="waves-effect waves-light btn modal-trigger">Contact us</a></li>
      </ul>
    </div>
  </nav>
<!--Side Menu   -->
  <ul class="sidenav" id="mobile-demo">
    <li><a href="#modal1" class="waves-effect waves-light btn modal-trigger">Login</a></li>  
    <li><a href="#modal2" class="waves-effect waves-light btn modal-trigger">Create Account</a></li>
	<li><a href="contact-page.php" class="waves-effect waves-light btn modal-trigger">Contact us</a></li>
  </ul>
	
<!--	Slider   -->
	<header>
		<div id='stars'></div>
             <div id='stars2'></div>
             <div id='stars3'></div>
             <div class="header" id="hContent"></div>
            
             <div class="nav navbar-fixed" id="nav"></div>
             <div id='title'>
                  <span>
                    Fast Youtube Views
                  </span>
                  <br>
              </div>
     </header>
    


  <!-- Modal Structure for Login   -->
  <div id="modal1" class="modal">
    <div class="modal-content">
     <table border="1px solid gray">
		  <a class="modal-close waves-effect waves-green btn-flat right"><i class="material-icons">close</i></a>
	<form action="login-validation.php" method="post">
	<tr><th colspan="2"><h3 style="text-align: center">Login to your Account</h3></th></tr>
		<tr><td>User Name: </td><td><input type="text" name="user" required placeholder="User Name" autofocus></td></tr>
		<tr><td>Password: </td><td><input type="password" name="password" required placeholder="Password"></td></tr>
    </table><br>
    <button type="submit" class="btn btn-primary right">Login</button>
    <input type="button" value="Forgot Password" class="btn btn-primary" onclick="window.location.href='forgot-form.php'" />
		
	</form>

    </div>
  </div>
	
	
<!--	Modal Structure for Registeration   -->
  <div id="modal2" class="modal">
    <div class="modal-content">
      <table border="1px solid gray">
		  <a class="modal-close waves-effect waves-green btn-flat right"><i class="material-icons">close</i></a>
	<form action="registration-methode.php" method="post">
	<tr><th colspan="2"><h3 style="text-align: center">Create Your Account</h3></th></tr>
		<tr><td>User Name: </td><td><input type="text" name="user" required placeholder="User Name"></td></tr>
		<tr><td>Email: </td><td><input type="email" name="email" required placeholder="Your Email"></td></tr>
		<tr><td>Password: </td><td><input type="password" name="password" required placeholder="Password"></td></tr>
		<tr><td>Channel Name: </td><td><input type="text" name="channelname" required placeholder="Your Channel Name"></td></tr>
		<tr><td>Video Link: </td><td><input type="text" name="videolink1" required placeholder="Place your video link here..."></td></tr>
<!--
					...................10 buttons for video upload soon...................

		<tr><td>Video Link: </td><td><input type="text" name="videolink2" placeholder=Place your video link here..."></td></tr>
		<tr><td>Video Link: </td><td><input type="text" name="videolink3" placeholder="Place your video link here..."></td></tr>
		<tr><td>Video Link: </td><td><input type="text" name="videolink4" placeholder="Place your video link here..."></td></tr>
		<tr><td>Video Link: </td><td><input type="text" name="videolink5" placeholder="Place your video link here..."></td></tr>
		<tr><td>Video Link: </td><td><input type="text" name="videolink6" placeholder="Place your video link here..."></td></tr>
		<tr><td>Video Link: </td><td><input type="text" name="videolink7" placeholder="Place your video link here..."></td></tr>
		<tr><td>Video Link: </td><td><input type="text" name="videolink8" placeholder="Place your video link here..."></td></tr>
		<tr><td>Video Link: </td><td><input type="text" name="videolink9" placeholder="Place your video link here..."></td></tr>
		<tr><td>Video Link: </td><td><input type="text" name="videolink10" placeholder="Place your video link here..."></td></tr>
-->
		</table><br>
		<button type="submit" class="btn btn-primary">Register</button>
	</form>
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
		 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });
	</script>
	
	
	
</body>
	
</html>