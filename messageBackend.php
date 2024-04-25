<?php

// Database credentials
$servername = "localhost"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = null; // Replace with your database password
$database = "ccsjdm"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
$query = "SELECT * FROM useremail";
$result = $conn->query($query);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["userId"]. " - Name: " . $row["Name"]. " - Email: " . $row["email"]. " -message". $row["message"]."<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();

?>