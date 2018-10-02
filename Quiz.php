<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$correctAnswers = 0;
$answer1 = $_POST['q1'];
$answer2 = $_POST['q2'];
$answer3 = $_POST['q3'];
$answer4 = $_POST['q4'];
$answer5 = $_POST['q5'];
$answerKey = ["EECS 448", "4","7","5","Topeka"];
if($answer1 == "EECS 448"){
  $correctAnswers++;
}
if($answer2 == "4"){
  $correctAnswers++;
}
if($answer3 == "7"){
  $correctAnswers++;
}
if($answer4 == "5"){
  $correctAnswers++;
}
if($answer5 == "Topeka"){
  $correctAnswers++;
}

echo "Quesiton 1: This class is...<br>You answered: " . $answer1 . "<br>Correct answer: " . $answerKey[0] . "<br><br>";
echo "Quesiton 2: This is lab...<br>You answered: " . $answer2 . "<br>Correct answer: " . $answerKey[1] . "<br><br>";
echo "Quesiton 3: How many days are in a week?<br>You answered: " . $answer3 . "<br>Correct answer: " . $answerKey[2] . "<br><br>";
echo "Quesiton 4: How many questions are in this quiz?<br>You answered: " . $answer4 . "<br>Correct answer: " . $answerKey[3] . "<br><br>";
echo "Quesiton 5: What is the capital of Kansas?<br>You answered: " . $answer5 . "<br>Correct answer: " . $answerKey[4] . "<br><br>";

echo "You got " . $correctAnswers . " answers correct for a score of " . $correctAnswers/5 * 100 . "%";
?>
