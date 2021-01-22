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
	

<div style="border: 2px solid gray; text-align: center; width: 40%; margin: auto; margin-top:3%">
	<form style="display: inline-grid; width: 90%; margin-bottom: 7%" action="forgot-validation.php" method="post">
	<h3>Create New Password:</h3>
		Username <td><input type="text" name="user" required placeholder="Your Name"></td><br>
		Email <td><input type="email" name="email" required placeholder="Your Email"></td><br>
		Create New Password <td><input type="password" name="password" required placeholder="New Password"></td><br>
		<button type="submit" class="btn btn-primary">Send</button>
	</form>
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
