<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    <title>Simple Blog</title>
  </head>
  <body>
    <header>
      <h1>Simple Blog</h1>
    </header>
    <nav>
      <ul>
        <li><a href="register.html">Register</a></li>
        <li><a href="login.html">Login</a></li>
        <!-- <li><a href="add_article.html">Add Article</a></li> -->
      </ul>
    </nav>
    <main>
      <?php
      include 'scripts/index.php';
      ?>
    </main>
    <footer>&copy; 2022 Simple Blog</footer>
  </body>
</html>
