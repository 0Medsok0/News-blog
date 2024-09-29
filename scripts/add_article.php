<?php
// add_article.php
include 'config.php';

$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['author'];

$sql = "INSERT INTO articles (title, content, author) VALUES ('$title', '$content', '$author')";
if ($conn->query($sql) === TRUE) {
    echo "Article added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>