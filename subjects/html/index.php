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
    <title>Tutorial-HTML</title>
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
          <h2  class="tutorial-title">Tutorial-HTML</h2>
          <h1  class="tutorial-header">How to learn HTML</h1>
      
          <div class="tutorial-container">

          <p>HTML (Hypertext Markup Language) is the standard markup language used for creating and structuring the content of web pages.</p>
          <p>It provides a set of tags and elements that define the structure, layout, and presentation of information on the internet. </p>
          <p>HTML uses a hierarchical structure to organize content, such as headings, paragraphs, lists, images, links, and more.</p>
          <p>t acts as the backbone of web pages, allowing browsers to interpret and display the content to users.</p>
          <p>This tutorial will teach you HTML from basic to advanced.</p>
          <img src="https://2.bp.blogspot.com/-veABjtwtafg/VlTHOWNx6lI/AAAAAAAAAFw/yvgTXayhJuQ/s1600/simple-web-page-code.png" 
          alt="PHP_BASICS" style="width:500px;height:300px;">

            <iframe width="560" height="315" src="https://www.youtube.com/embed/MDLn5-zSQQI" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
            clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

          <iframe width="600" height="315" src="https://www.youtube.com/embed/UB1O30fR-EE"
           title="YouTube video player" frameborder="20" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
         
          <iframe width="560" height="315" src="https://www.youtube.com/embed/mJgBOIoGihA" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
            clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

          </div>
          <div class="quiz-btn">
                <a href="quiz.php">Start HTML Quiz</a>
              </div>
        </main>
      </div>
      <script src="../../index.js"></script>
</body>
</html>