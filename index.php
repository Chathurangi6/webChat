<!DOCTYPE html>
<html>
<head>
	<title>WebChat</title>
</head>
<body>
	<div id="main">
		<div id="info">
			<h2>login here</h2>
			<form action="login.php" method="post">
				<label><b>Username</b></label>
				<input type="text" name="uname" placeholder="User name"><br><br>
				<label><b>Password</b></label>
				<input type="password" name="pass" placeholder="password"><br><br>
				<button style="background-color:#5B70F7;color:white" type="submit"><b>Login</b></button>
			</form>
			<form action="signup.php" method="post">
				<h2>Don't have an account? sign up here</h2>
				<label>Username </label>
				<input type="text" name="uname" placeholder="User name"><br><br>
				<label>Email </label>
				<input type="email" name="email" placeholder="E-mail"><br><br>
				<label>Password </label>
				<input type="password" name="pass" placeholder="password"><br><br>
				<button style="background-color:#5B70F7;color:white" type="submit"><b>Signup</b></button>
			</form>

		</div>
	</div>

</body>
</html>
