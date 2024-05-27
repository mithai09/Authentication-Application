<?php
// connection.php

$servername = "localhost";  // Change this to your server name
$username = "root";         // Change this to your database username
$password = "";             // Change this to your database password
$dbname = "admin login";     // Change this to your database name

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit(); // Ensure the script stops executing if the connection fails
}
?>

