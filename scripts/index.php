<?php
// index.php
include 'config.php';

// Выполнение SQL-запроса для извлечения данных о статьях из базы данных
$sql = "SELECT id, title, content, author FROM articles ORDER BY created_at DESC";
$result = $conn->query($sql);

// Проверка наличия результатов запроса
if ($result->num_rows > 0) {
    // Цикл для перебора результатов запроса и динамического создания HTML-элементов для отображения каждой статьи
    while ($row = $result->fetch_assoc()) {
        echo "<div class='article'>";
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<p>" . $row['content'] . "</p>";
        echo "<p>By " . $row['author'] . "</p>";
        echo "</div>";
    }
} else {
    echo "No articles found.";
}

$conn->close();
?>
