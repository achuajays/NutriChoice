<?php
session_start();
    $servername = "localhost";
	$username = "root";
	$password = "achuajays@2003";
	$dbname = "NutriChoice";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

    $n = $_POST['n'];
    $p = $_POST['p'];

   
	// Retrieve menu items from database
	$sql = "SELECT * FROM login WHERE n = '$n' AND p = '$p'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		// Output data of each row
		while($row = mysqli_fetch_assoc($result)) {
            $_SESSION['user'] = $n ;

            echo "New record created successfully";
            header("Location: main.php");
            exit;
		}
	} else {
        echo "New record created successfully";
        header("Location: login.php");
        exit;
	}

    echo "<br>".'<a href="' . $link_url . '">' . $link_text . '</a>';

	mysqli_close($conn);
   ?>