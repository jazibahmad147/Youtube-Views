<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Form</title>
</head>
<body>
	<form action="admin-login-validation.php" method="post">
	<h2>Login Here</h2>
		Username: <input type="text" name="user" required>
		Password: <input type="password" name="password" required>
		<button type="submit" class="btn btn-primary">Login</button>
		<input type="button" value="Forgot Password" class="btn btn-primary" onclick="window.location.href='forgot-form.php'" />
		<input type="button" value="Create Account" onclick="window.location.href='registration-form.php'" />

	</form>
	
	
</body>
</html>