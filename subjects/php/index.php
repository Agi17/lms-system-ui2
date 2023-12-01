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
    <title>Tutorial-PHP</title>
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

        </div>
    
        <main class="main-content">
          <form onsubmit="search()" class="search-bar">
            <input type="text" id="search-input" placeholder="Search..." />
            <button type="submit" class="search-button">Search</button>
          </form>
    
          <h2  class="tutorial-title">Tutorial-PHP</h2>
          <h1  class="tutorial-header">How to learn PHP </h1>
          <div  class="tutorial-container">

            <p>PHP, which stands for Hypertext Preprocessor,
            is a server-side scripting language used for web development.</p>
            <p>It is primarily used to create dynamic web pages and interact with databases. </p>
            <p>PHP is embedded within HTML code and executed on a web server, 
            enabling developers to build interactive and functional websites.</p>
            <p>With its simplicity, versatility, and widespread adoption,
             PHP has become a popular choice for web developers around the world.</p>
             <p>This tutorial will teach you PHP from basic to advanced.</p>
             <img src="https://i0.wp.com/codeexercise.com/wp-content/uploads/2016/11/Best-PHP-Tutorial-For-Beginners-Format-Variables.jpg?fit=777%2C520&w=640" 
             alt="PHP_BASICS" style="width:500px;height:300px;">

            <iframe width="560" height="315" src="https://www.youtube.com/embed/qVU3V0A05k8" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
            clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  
            <iframe width="560" height="315" src="https://www.youtube.com/embed/qVU3V0A05k8"
             title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
            clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  
            <iframe width="560" height="315" src="https://www.youtube.com/embed/mXdpCRgR-xE" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
            clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <div class="quiz-btn">
                <a href="quiz.php">Start PHP Quiz</a>
              </div>
        </main>
      </div>
      <script src="../../index.js"></script>
</body>
</html>