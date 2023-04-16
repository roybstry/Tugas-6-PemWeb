<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
</head>
<body>
	<h1>Form Login</h1>
	<form method="post">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username"><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password"><br><br>
		<input type="submit" value="Login">
	</form>
	<?php include 'login_process.php'; ?>
</body>
</html>