<?php
// config.php
$servername = "localhost";
$username = "user";
$password = "pass";
$dbname = "blog";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
