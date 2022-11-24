<html>
<head>
<title>Login Page</title>
</head>
<body>
<style>
	body{
		background-color: royalblue;
	}
	.main-div{
		margin:50px auto;
		text-align:Center;
		padding: 40px;
		min-height: 120px;
		border-radius: 100px;
		background-color: turquoise;
	}
</style>
<div class = "main-div">

<h1 align="Center">Log In </h1>
<form align = "center" action = "Connection.php" method="post">
	<p>
		<label>Username:</label>
		<input type = "user" name = "username"/>
	</p>
	<p>
		<label>Password:</label>
		<input type = "Password" name = "password"/>
	</p>
	<p>
		<input type="submit" name="Login"/>
	</p>
</form>
</body>
</html>