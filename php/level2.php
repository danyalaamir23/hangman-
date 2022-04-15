<!DOCTYPE html>
<html>
  <?php session_start()?>
<head>
<link rel="stylesheet" href="hangman.css">
<title> Hangman </title>
</head>
<body>


<div class="navbar">
    <a href="https://codd.cs.gsu.edu/~cmccurley1/P2/input.php">Home</a>
    <a href="https://codd.cs.gsu.edu/~cmccurley1/P2/level1.php">Level 1</a>
    <a href="https://codd.cs.gsu.edu/~cmccurley1/P2/level2.php">Level 2</a>
    <a href="https://codd.cs.gsu.edu/~cmccurley1/P2/level3.php">Level 3</a>
    <a href="https://codd.cs.gsu.edu/~cmccurley1/P2/level4.php">Level 4</a>
  </div>

<div class="heading"> Hangman! </div>

<div class= "man">
  <div class="hang">
    <img src="hang.png" alt="hang">
  </div>
  <div class="head">
    <img src="head.png" alt="head">
  </div>
  <div class="body">
    <img src="body.png" alt="body">
  </div>
  <div class="rightarm">
    <img src="rightarm.png" alt="rightarm">
  </div>
  <div class="leftarm">
    <img src="leftarm.png" alt="leftarm">
  </div>
  <div class="rightleg">
    <img src="rightleg.png" alt="rightleg">
  </div>
  <div class="leftleg">
    <img src="leftleg.png" alt="leftleg">
  </div>

</div>
<div class="guess">
<?php


if(!isset($_SESSION['word'])){
    $word = "SCHOOL";
    $_SESSION['word'] = $word;
    $_SESSION['guesses'] = [];
    $_SESSION['lives'] = 5;
}

if(isset($_POST['guess'])){
    if(!in_array($_POST['guess'], $_SESSION['guesses'])){
        if(strpos($_SESSION['word'], $_POST['guess']) === FALSE){
            $_SESSION['lives']--;
        }
        $_SESSION['guesses'][] = $_POST['guess'];
    } else {
        echo "You have to use a different letter!<br>";
    }

}

$remainingLetters = array_diff(range('A', 'Z'), $_SESSION['guesses']);

if($_SESSION['lives'] <= 0){
    echo "Game Over!<br>";
    echo "The word was " . $_SESSION['word'];
    unset($_SESSION['word']);
} else {
    $lettersLeftToGuess = 0;
    $currentStateOfPlay = '';
    $wordLength = strlen($_SESSION['word']);
    for($i = 0; $i < $wordLength; $i++){
        if(in_array($_SESSION['word'][$i], $_SESSION['guesses'])){
            $currentStateOfPlay .= $_SESSION['word'][$i];
        } else {
            $currentStateOfPlay .= "_";
            $lettersLeftToGuess++;
        }
        $currentStateOfPlay .= " ";
    }
    echo $currentStateOfPlay;

    if($lettersLeftToGuess == 0){
        echo "You won!";
        unset($_SESSION['word']);
    }

}


if($_SESSION['lives'] !=0 && $lettersLeftToGuess !=0){
?>
<form method = "post" action = "">
    <select name = "guess">
    <?php
        foreach($remainingLetters AS $letter){
            echo '<option value = "'.strtoupper($letter).'">'.strtoupper($letter).'</option>';
        }   
    ?>
    </select>
    <input type = "submit" name = "submit" value = "GUESS">
</form>
<?php
} 
?>
</div>

<pre>
  <?php print file_get_contents("hangman_login.txt")?>
</pre>
</div>

<div class=table>
<table>
  <tr>
    <th>User</th>
    <th>Score</th>
  </tr>
  <tr>
  <td><?php echo username ?></a></td>
    <td><?php echo $_SESSION['lives'] ?></a></td>
  </tr>
</table>
</div>

<div class="main">
        <div class="container">
            <p> Want a Hint? </p>
            <div class="overlay">
              <div class="text">Learning is key!</div>
            </div>
          </div>
    </div>



</body>
</html>