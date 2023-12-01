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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-SQL</title>
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
    
          <h2  class="tutorial-title">Tutorial-SQL</h2>
          <h1 class="tutorial-header">How to learn SQL</h1>
          <div class="tutorial-container">
          <p>SQL (Structured Query Language) is a programming language used for managing and manipulating relational databases. </p>
          <p>It provides a standardized syntax for interacting with databases, allowing users to perform operations like creating,</p>
          <p> modifying, and retrieving data. SQL is essential for working with databases </p>
            <p>and is widely used in industries for efficient data storage and retrieval.</p>
          <p>It enables the management and analysis of large datasets, making it a crucial skill for data professionals.</p>
          <p>This tutorial will teach you SQL from basic to advanced.</p>
          <img src="https://www.researchgate.net/profile/Mohammad_Sadoghi/publication/283105667/figure/download/fig2/AS:668911880114192@1536492428810/SQL-code-example-of-a-query.png" 
          alt="PHP_BASICS" style="width:500px;height:300px;">


            <iframe width="560" height="315" src="https://www.youtube.com/embed/fUK94jOFwBc" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
            clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  
            <iframe width="560" height="315" src="https://www.youtube.com/embed/jk6_L0k8VPg" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
            clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  
            <iframe width="560" height="315" src="https://www.youtube.com/embed/vncBSUNb4NA" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
            clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <div class="quiz-btn">
                <a href="quiz.php">Start SQL Quiz</a>
              </div>
        </main>
      </div>
      <script src="../../index.js"></script>
</body>
</html>