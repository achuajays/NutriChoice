<?php
    $servername = "localhost";
	$username = "root";
	$password = "achuajays@2003";
	$dbname = "NutriChoice";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

    $link_url = 'admin.php';
  $link_text = 'back';
	// Retrieve menu items from database
	$sql = "SELECT * FROM report";
	$result = mysqli_query($conn, $sql);
echo "<b><u>ITEMS</u></b><hr>";
	if (mysqli_num_rows($result) > 0) {
		// Output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "name : " . $row["n"]."  discription: " . $row["m"]. "<br><hr>";
		}
	} else {
		echo "No items found.";
	}

    echo "<br>".'<a href="' . $link_url . '">' . $link_text . '</a>';

	mysqli_close($conn);
   ?>