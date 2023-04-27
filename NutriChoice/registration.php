<?php
$servername = "localhost";
$username = "root";
$password = "achuajays@2003";
$dbname = "NutriChoice";

// Create a new connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the form data from the HTTP POST request
$n = $_POST["name"];
$e = $_POST[ "email"];
$s = $_POST["subject"];
$m = $_POST["message"];

// Construct the SQL query to insert a new row into the customers table
$sql = "INSERT INTO my_table (n,e,s,m) VALUES ('$n','$e','$s','$m')";

// Execute the query and check if it was successful
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("Location: main.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>