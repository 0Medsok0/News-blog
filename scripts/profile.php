<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Блог/css/profile.css">
    <title>Profile</title>
</head>

<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <li><a href="/Блог/add_article.html">Add Article</a></li>
    <li><a href="/Блог/edit_article.html">Edit Article</a></li>

</body>

</html>