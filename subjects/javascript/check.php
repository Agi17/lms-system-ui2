<!DOCTYPE html>
<?php 
session_start();
$servername = "localhost";
$username = "root";
$password="";
$dbname="registered_stud";
$link=mysqli_connect('localhost', $username, $password, $dbname);
$conn=mysqli_select_db($link, $dbname);

if(!$conn) {
    die("Database Connection Failed!!! Error Message: " .mysqli_connect_error());
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

      <div class="results">  
        <?php
            if ($_POST["submit"]) {
                $score = 0;
                $item = 0;
                $tutorial = $_POST["submit"];
                
                array_shift($_POST);
                
                foreach ($_POST as $answer) {
                    $query = mysqli_query($link, "SELECT * FROM `exam_answer` WHERE tutorial_name='".$tutorial."' AND exam_answer_id='".$item."'");
                    
                    while($row = mysqli_fetch_array($query)) {
                    if ($row['answer'] == $answer ) {
                        ++$score;
                    }
                    }
                    ++$item;
                }

                $selectQuery = mysqli_query($link, "SELECT * FROM `tutorial` WHERE name='".$tutorial."'");
                
                $id = 0;
                $student_id = $_SESSION['student_id'];

                while($tutorial_row = mysqli_fetch_array($selectQuery)) {
                    $id = $tutorial_row['tutorial_id'];
                }

                $insert_query = "INSERT INTO progress (student_id, tutorial_id, score, max_score) VALUES ( '".$student_id."','". $id."', '". $score."','". $item."')";

                if (mysqli_query($link, $insert_query)) {
                    $percent = $score/$item * 100;
                    if ($percent > 90 && $percent < 100) {
                        ?>
                            <h1>High Score</h1>
                            <h4>Congratulations</h4>
                            <p>You scored out <?php echo $score?> out of <?php echo $item?> </p>
                            <p>You're a quiz superstar.</p>
                    <?php } else if ($percent >= 75 && $percent <= 90) {
                        ?>

                            <h1>Average Score</h1>
                            <h4>Well done!</h4>
                            <p>You scored out <?php echo $score?> out of <?php echo $item?> </p>
                            <p>You're making progress, keep up the good work.</p>
                            
                        <?php
                    } else {
                        ?>
                        <h1>Low score</h1>
                        <p>Oops! You scored <?php echo $score?> out of <?php echo $item?> </p>
                        <p>Keep studying and try again for a better result next time.</p>
                    
                 <?php   }
                } else {
                    echo 'Error inserting progress';
                }
            }

        ?>
    </div>

    </main>
  </div>

  <script src="exam.js"></script>
  <script src="../../index.js"></script>

</body>
</html>


<!-- Item : 10
Score : 8

Percentage: 8/10 * 100 = 90%

hight score = 90 - 100 %
average = 75 - 80 %
low score = 0 - 75 % -->