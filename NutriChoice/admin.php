<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<style>
		body {
			background-image: url("imagea.avif");
			background-size: cover;
			background-repeat: no-repeat;
		}
		
		.navbar {
			background-color: #333;
			overflow: hidden;
			position: fixed;
			top: 0;
			width: 100%;
		}

		.navbar a {
			float: left;
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
		}

		.navbar a:hover {
			background-color: #ddd;
			color: black;
		}

		.icon {
			display: inline-block;
			margin: 0 20px;
			height: 30px;
			width: 30px;
			background-image: url("icon1.png");
			background-size: contain;
			background-repeat: no-repeat;
			background-position: center;
		}

		.icon2 {
			background-image: url("icon2.png");
		}

		.container {
			margin-top: 100px;
			margin-left: 20px;
			color: white;
		}
	</style>
</head>
<body>
	<div class="navbar">
		<a href="adminextablish.php">REPORT CHECKING</a>
		<a href="adminr.php">REPORTS</a>
        <a href="index.php">NAVIGATION SITE</a>
		<div class="icon"></div>
		<div class="icon icon2"></div>
	</div>

	<div class="container">
		<p><strong>Admin Privileges and Duties:</strong></p>
		<p>As an admin, you have access to all areas of the system and are responsible for maintaining its security and integrity. Your duties include:</p>
		<ul>
			<li>Creating and managing user accounts</li>
			<li>Setting up and configuring the system</li>
			<li>Monitoring system logs and activities</li>
			<li>Enforcing security policies and procedures</li>
			<li>Resolving any issues or incidents that arise</li>
		</ul>
		<p>Please exercise caution and discretion in the performance of your duties, and always prioritize the safety and security of the system and its users.</p>
	</div>
</body>
</html>