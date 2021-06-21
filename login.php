<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>

	<h1>Login</h1>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<fieldset>
			<legend>Login</legend>

			<label for="username">User Name:</label>
			<input type="text" name="username" id="username" value="<?php echo $username; ?>">
			<br><br>

			<label for="password">Password:</label>
			<input type="password" name="password" id="password" value="<?php echo $password; ?>">
			<br><br>

			<input type="checkbox" name="rememberme" id="rememberme">
			<label for="rememberme">Remember Me</label>
			<br><br>

			<input type="submit" name="submit" value="Login">
		</fieldset>
	</form>

	<br>
	<a href="file-io.php">Click to Register</a>
</body>
</html>