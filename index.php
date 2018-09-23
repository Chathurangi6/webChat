<!DOCTYPE html>
<html>
<head>
	<title>WebChat</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="main">
		<div id="info">
			<h2>login here</h2>
			<form class="form-horizontal" action="login.php" method="post">
				<div class="form-group">
				<label class="control-label col-sm-2"><b>Username</b></label>
				<div class="col-sm-10">
				<input type="text" name="uname" placeholder="User name">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2"><b>Password</b></label>
				<div class="col-sm-10">
				<input type="password" name="pass" placeholder="password">
			</div>
		</div>
				<button style="background-color:#5B70F7;color:white" type="submit"><b>Login</b></button>
			</form>
			<form class="form-horizontal" action="signup.php" method="post">
				<h2>Don't have an account? sign up here</h2>
				<div class="form-group">
				<label class="control-label col-sm-2">Username </label>
				<div class="col-sm-10">
				<input type="text" name="uname" placeholder="User name"><br><br>
				<label class="control-label col-sm-2">Email </label>
				<div class="col-sm-10">
				<input type="email" name="email" placeholder="E-mail"><br><br>
				<label class="control-label col-sm-2">Password </label>
				<div class="col-sm-10">
				<input type="password" name="pass" placeholder="password"><br><br>
				<button style="background-color:#5B70F7;color:white" type="submit"><b>Signup</b></button>
			</form>

		</div>
	</div>

</body>
</html>
