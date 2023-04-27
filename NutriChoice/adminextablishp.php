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
$n = $_POST["n"];
$e = $_POST["e"];



// Construct the SQL query to insert a new row into the customers table
$sql = "DELETE FROM my_table WHERE n = '$n' AND e
  = '$e'";


$sqll = "DELETE FROM report WHERE n = '$n'";


// Execute the query and check if it was successful
if (mysqli_query($conn, $sql)) {
    if (mysqli_query($conn, $sqll)){         
        echo "successfull";
        header("Location: admin.php");
        exit;
    }
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>