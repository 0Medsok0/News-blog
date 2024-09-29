<?php
// edit_article.php
include 'config.php';

// $id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
// WHERE id = $id"
$sql = "UPDATE articles SET title = '$title', content = '$content'"; 
if ($conn->query($sql) === TRUE) {
    // echo "Article updated successfully";
    header("Location: /Блог/index.html");  
    //article.php?id=$id
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

