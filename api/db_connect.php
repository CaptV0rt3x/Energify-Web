<?php
$servername = "localhost";
$username = "id5012978_vamsi";
$database = "id5012978_energify";
$password = "qwerty121";
// Create a new connection to the MySQL database using PDO
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>