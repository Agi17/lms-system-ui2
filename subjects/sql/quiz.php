<!DOCTYPE html>

<?php
session_start();
/* // Connection in Database*/

if (!isset($_SESSION['email'])) {
  header( 'Location: login.php' );
}

?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../ind.css">
  <link rel="stylesheet" href="../../exercises.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Learning Management System</title>
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
      <form class="search-bar">
        <input type="text" id="search-input" placeholder="Search..." />
        <button type="submit" class="search-button">Search</button>
      </form>

      <h2> CSS Quiz </h2>
      <!-- <h5>This HTML tutorial also contains nearly 50 HTML exercises.</h5> -->
      <div class="exercises-container">
      <!-- <h1  class="exercises-header">Test Yourself With Exercises </h1> -->

      <form class="form-exercises" action="check.php" method="POST">  
        <a class="prev">
          <i class="fa-solid fa-arrow-left  fa-2xl"></i>
        </a> 
        <a class="next"><i class="fa-solid fa-arrow-right fa-2xl"></i></a> 
        <div class="quiz-btn submit-btn">
          <button class="submit" name="submit" value="css" type="submit">Submit</button>
        </div>
      </form>

    </main>
  </div>

  <script src="exam.js"></script>
  <script src="../../index.js"></script>
</body>
</html>