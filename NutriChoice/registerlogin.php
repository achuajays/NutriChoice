<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
	<style>
		body {
			background-image: url('imageregister.avif');
			background-size: cover;
			font-family: Arial, sans-serif;
        }
		h1 {
			color: #fff;
			text-align: center;
			margin-top: 50px;
		}
		form {
			width: 300px;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
            background-color: rgba(255, 255, 255, 0);
			box-shadow: 0 0 10px rgba(0,0,0,0.3);
            
		}
        label{
            color:white;

        }
		input[type="text"],
		input[type="password"] {
			width: 90%;
			padding: 10px;
			margin: 10px 0;
			border-radius: 5px;
            margin-right:10px;
			border: none;
			box-shadow: 0 0 5px rgba(0,0,0,0.1);
			font-size: 16px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<h1>Register</h1>
	<form method="post" action="registerloginp.php">
		<label for="username">Username:</label>
		<input type="text" id="username" name="n" required>

		<label for="password">Password:</label>
		<input type="password" id="password" name="p" required>

		<label for="confirm_password">Confirm Password:</label>
		<input type="password" id="confirm_password" name="cp" required>

		<input type="submit" value="Register">
	</form>
</body>
</html>
