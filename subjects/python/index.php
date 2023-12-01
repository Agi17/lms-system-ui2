<!DOCTYPE html>
<html lang="en">
<?php
session_start();
/* // Connection in Database*/

if (!isset($_SESSION['email'])) {
  header( 'Location: ../../login.php' );
}

?>
<head>
    <link rel="stylesheet" href="../../ind.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-PYTHON</title>
</head>
<body>
    <header class="header">
    <div class="logo">
      <img src="../../assets/logo.png" alt="Logo" />
      <h1>Learning Management System</h1>
    </div>
    <div class="profile">
      <button class="profile-button"><i class="fa-solid fa-user fa-2xl" style="color: #fcfcfc;"></i></button>
      <div class="drop-down" id="dropDown">
        <a href="../../progress.php" class="dropdown-item">Progress</a>
        <a href="../../logout.php" class="dropdown-item">Log Out</a>
      </div>
    </div>
      </header>
      <div class="container">
        <div class="sidebar">
          <ul class="menu">
          <li class="menu-item"><a href="../../index.php">Home</a></li>
          <li class="menu-item"><a href="../../flashcard-index.php">Flashcards</a></li>

          </ul>
        </div>
    
        <main class="main-content">
          <form onsubmit="search()" class="search-bar">
            <input type="text" id="search-input" placeholder="Search..." />
            <button type="submit" class="search-button">Search</button>
          </form>
    
          <h2  class="tutorial-title">Tutorial-PYTHON</h2>
          <h1  class="tutorial-header">How to learn Python</h1>
          <div class="tutorial-container">
          <p>Python is a popular, high-level programming language known for its simplicity and readability.</p>
          <p>It is extensively used in various domains such as web development, data analysis, AI, and scientific computing.</p>
          <p>Python's clean syntax and vast library support make it easy to learn and use. </p>
          <p>It is a versatile language that runs on multiple platforms and has a thriving community of developers.</p>
          <p>Overall, Python provides a powerful and flexible toolset for creating a wide range of applications.</p>
          <p>This tutorial will teach you PYTHON from basic to advanced.</p>

          <img src="https://image.slidesharecdn.com/phpbasics-130617053835-phpapp02/95/php-basics-10-638.jpg?cb=1371447782" 
          alt="PHP_BASICS" style="width:500px;height:300px;">

            <iframe width="560" height="315" src="https://www.youtube.com/embed/k9TUPpGqYTo" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
            clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/khKv-8q7YmY" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
            clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/W8KRzm-HUcc" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
            clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <div class="quiz-btn">
                <a href="quiz.php">Start PYTHON Quiz</a>
              </div>
        </main>
      </div>
      <script src="../../index.js"></script>
</body>
</html>