<?php
// login.php
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT password FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "Login successful";
    } else {
        echo "Invalid password";
    }
} else {
    echo "User not found";
}

if (password_verify($password, $row['password'])) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: profile.php");
    exit();
} else {
    echo "Invalid password";
}


$conn->close();
?>