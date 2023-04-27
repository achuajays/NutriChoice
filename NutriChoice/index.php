<!DOCTYPE html>
<html>
<head>
	<title>Example Page</title>
	<style>
		body {
			background-image: url("imagein.avif");
			background-size: cover;
			background-repeat: no-repeat;
		}

		.container {
			display: flex;
			flex-direction: row;
			justify-content: center;
            margin-top:10px;
            padding:50px;
			height: 100vh;
            max-width:600px;
            background-color: rgba(255, 255, 255, 0);
            margin:0 auto;
		}

		.container img {
			margin: 0 10px;
			cursor: pointer;
            background-color: rgba(255, 255, 255, .2);
            height:400px;
            width : 400px;
		}
        h1 {
			color: #333;
			animation: color-change 5s infinite;
		}

		@keyframes color-change {
			0% {
				color: #333;
			}
			50% {
				color: #f00;
			}
			100% {
				color: #333;
			}
		}
	</style>
</head>
<body>
    <center><h1>NAVIGATION</h1></center>
	<div class="container">
        <a href="login.php"><img src="img.jpg" alt="Main"></a>
		<a href="admin.php"><img src="imgg.jpg" alt="Admin"></a>
	</div>
</body>
</html>