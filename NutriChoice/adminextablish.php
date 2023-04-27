<!DOCTYPE html>
<html>
<head>
	<title>Example Form</title>
	<style>
		body {
			background-image: url("imagef.avif");
			background-size: cover;
			background-repeat: no-repeat;
		}

		form {
			margin: 50px auto;
			padding: 20px;
			width: 400px;
			background-color: #fff;background-color: rgba(255, 255, 255,0.5);
			border-radius: 5px;
            
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}

		input[type="text"] {
			padding: 10px;
			margin: 10px 0;
			width: 100%;
			box-sizing: border-box;
			border: 2px solid #ccc;
			border-radius: 4px;
			background-color: #f8f8f8;
			font-size: 16px;
		}

		input[type="submit"], a.button {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			border-radius: 4px;
			font-size: 16px;
			margin: 10px 0;
			border: none;
			cursor: pointer;
		}

		input[type="submit"]:hover, a.button:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<form method="post" action="adminextablishp.php">
		<label for="name">Name:</label>
		<input type="text" id="name" name="n" placeholder="Enter your name">

		<label for="email">Email:</label>
		<input type="text" id="email" name="e" placeholder="Enter your email">

		<input type="submit" value="Submit">
		<a href="admin.php" class="button">Admin Page</a>
	</form>
</body>
</html>