<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CONTACT US</title>
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
<body>
	
	<!--	MENU -->
		  <nav style='margin-bottom: 20px'>
    <div class="nav-wrapper ">
      <a href="#!" class="brand-logo">Fast Views</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="home.php" class="waves-effect waves-light btn modal-trigger">Home</a></li>
        <li><a href="contact-page.php" class="waves-effect waves-light btn modal-trigger">Contact us</a></li>
      </ul>
    </div>
  </nav>
	
	<!--	Side MENU   -->
  <ul class="sidenav" id="mobile-demo">
    <li><a href="home.php" class="waves-effect waves-light btn modal-trigger">Home</a></li>  
       <li><a href="contact-page.php" class="waves-effect waves-light btn modal-trigger">Contact us</a></li>
  </ul>
	
	<div style="border: 2px solid gray; text-align: center; width: 40%; margin: auto">
	<form style="display: inline-grid; width: 90%; margin-bottom: 7%" action="message-confirm.php" method="post">
	<h2>Contact us:</h2>
		Name: <td><input type="text" name="user" required placeholder="Your Name"></td><br>
		Email: <td><input type="email" name="email" required placeholder="Your Email"></td><br>
		Message: <td><textarea name="message" required placeholder="Type your message here..."></textarea></td><br>
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
	</script>

</body>
</html>