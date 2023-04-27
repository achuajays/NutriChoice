<html>
<head>
	<title>Login Page</title>
	<style>
		body {
			background-image: url("image.avif");
			background-repeat: no-repeat;
			background-size: cover;
			font-family: Arial, sans-serif;
			color: #fff;
		}
		.container {
			width: 30%;
			margin: 10% auto;
			padding: 20px;
			background-color: rgba(0, 0, 0, 0.7);
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}
		h1 {
			text-align: center;
			margin-bottom: 20px;
		}
		label {
			display: block;
			font-size: 18px;
			margin-bottom: 5px;
		}
		input[type="text"],
		input[type="password"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: none;
			border-radius: 5px;
			font-size: 18px;
			background-color: rgba(255, 255, 255, 0.8);
			color: #333;
		}
		input[type="submit"],input[type="button"] {
			display: block;
			margin: 0 auto;
			padding: 10px 20px;
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 5px;
			font-size: 18px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Login Page</h1>
		<form action="loginphp.php" method="post">
			<label for="username">Username:</label>
			<input type="text" id="username" name="n" required>
			<label for="password">Password:</label>
			<input type="password" id="password" name="p" required>
			<input type="submit" value="Login">
            <a href="registerlogin.php"><input type="button" value="register"></a>
            <a href="index.php"><input type="button"   value="NAVIGATION SITE"></a>
		</form>
	</div>
</body>
</html>