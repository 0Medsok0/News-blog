<?php
// register.php
include 'config.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "Registration successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($conn->query($sql) === TRUE) {
    header("Location: /Блог/index.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>