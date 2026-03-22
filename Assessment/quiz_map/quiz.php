<?php
session_start();

// RESET score on refresh
if (!isset($_POST['answer'])) {
  $_SESSION['score'] = 0;
}

// questions
$questions = [
  ["img" => "southKorea.webp", "answer" => "South Korea"],
  ["img" => "france.webp", "answer" => "France"],
  ["img" => "brazil.webp", "answer" => "Brazil"]
];

// check answer
$message = "";
$msgClass = "";

if (isset($_POST['answer'])) {
  if ($_POST['answer'] == $_SESSION['correct']) {
    $_SESSION['score']++;
    $message = "Correct!";
    $msgClass = "correct";
  } else {
    $_SESSION['score'] = 0;
    $message = "Wrong!";
    $msgClass = "wrong";
  }
}

// new question
$q = $questions[array_rand($questions)];
$_SESSION['correct'] = $q['answer'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Pink Quiz</title>
  <style>
    body {
      background-color: #ffe6f0;
      font-family: Arial;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .box {
      width: 320px;
      height: 480px;
      background: #fff0f5;
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      text-align: center;
    }

    h2 {
      color: #ff4d88;
      margin-top: 0;
    }

    img {
      width: 200px;
      height: 120px;
      border-radius: 10px;
      border: 2px solid #ff99cc;
    }

    button {
      width: 100%;
      padding: 10px;
      margin: 6px 0;
      border: none;
      border-radius: 8px;
      background: #ff66a3;
      color: white;
      font-size: 15px;
      cursor: pointer;
    }

    button:hover {
      background: #e60073;
    }

    .msg {
      font-weight: bold;
      margin: 10px;
    }

    .correct {
      color: green;
    }

    .wrong {
      color: red;
    }
  </style>
</head>

<body>

<div class="box">

<h2>Score: <?php echo $_SESSION['score']; ?></h2>

<?php 
if ($message != "") {
  echo "<div class='msg $msgClass'>$message</div>";
}
?>

<img src="<?php echo $q['img']; ?>"><br><br>

<form method="POST">
  <button name="answer" value="South Korea">South Korea</button>
  <button name="answer" value="France">France</button>
  <button name="answer" value="Brazil">Brazil</button>
</form>

</div>

</body>
</html>