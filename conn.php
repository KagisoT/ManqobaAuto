<?php
// database.php
$host = 'localhost'; // or '127.0.0.1'
$username = 'root';  // Default username for MariaDB
$password = '';      // Default password for MariaDB (may vary depending on your installation)
$database = 'users_db'; // Your database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
