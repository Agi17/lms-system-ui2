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
    <title>Tutorial-JAVASCRIPT</title>
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
            <li class="menu-item"><a href="./exercises.php">Flashcards</a></li>

          </ul>
        </div>
    
        <main class="main-content">
          <form onsubmit="search()" class="search-bar">
            <input type="text" id="search-input" placeholder="Search..." />
            <button type="submit" class="search-button">Search</button>
          </form>
    
          <h2  class="tutorial-title">Tutorial-JAVASCRIPT</h2>
          <h1  class="tutorial-header">How to learn Java Script </h1>
          <div class="tutorial-container">
          <p>JavaScript is a widely-used programming language that runs on the client-side</p>
          <p>(in the user's web browser) and is primarily used for creating dynamic and interactive web pages.</p>
          <p>It provides the ability to manipulate and modify website content, handle user interactions,</p>
          <p>and perform various tasks in real-time. JavaScript is often used in conjunction with HTML and </p>
          <p>CSS to enhance the functionality and interactivity of web applications.With its versatility and </p>
          <p>extensive libraries and frameworks, JavaScript has become a cornerstone technology for web development.</p>
          <p>This tutorial will teach you JAVASCPIRT from basic to advanced.</p>
          <img src="https://miro.medium.com/max/1676/1*IVfK-vuv7JV8I_WVvG_Gxg.png" 
          alt="PHP_BASICS" style="width:500px;height:300px;">

            <iframe width="560" height="315" src="https://www.youtube.com/embed/SajRjc9KKUE"
             title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
            clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  
            <iframe width="560" height="315" src="https://www.youtube.com/embed/JMy6z1GricM" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
            clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  
            <iframe width="560" height="315" src="https://www.youtube.com/embed/LiuzigJldNo" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
             clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <div class="quiz-btn">
                <a href="quiz.php">Start JAVASCRIPT Quiz</a>
              </div>

        </main>
      </div>


      <script src="../../index.js"></script>
</body>
</html>