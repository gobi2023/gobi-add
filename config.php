<?php
// MySQL connection parameters
$host = "localhost"; // change this to your MySQL host
$username = "root"; // change this to your MySQL username
$password = "root"; // change this to your MySQL password
$database = "world"; // change this to your MySQL database name

// Create MySQL connection
$mysqli = new mysqli($host, $username, $password, $database);

// Check if connection was successful
if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}

// Execute SQL query
$result = $mysqli->query("SELECT Name, District FROM world.city WHERE Name = 'kabul'");

// Check if query was successful
if (!$result) {
    die("Failed to execute query: " . $mysqli->error);
}

// Fetch result as associative array
$row = $result->fetch_assoc();

// Print result
echo "City: " . $row["Name"] . "<br>";
echo "District: " . $row["District"] . "<br>";

// Free result set
$result->free();

// Close MySQL connection
$mysqli->close();
?>
