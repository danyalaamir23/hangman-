<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="hangmanlogin.css">
<title> Hangman Login </title>
</head>
<body>
<h1>HANGMAN!</h1>

  <div class="navbar">
    <a href="https://codd.cs.gsu.edu/~cmccurley1/P2/input.php">Home</a>
    <a href="https://codd.cs.gsu.edu/~cmccurley1/P2/level1.php">Level 1</a>
    <a href="https://codd.cs.gsu.edu/~cmccurley1/P2/level2.php">Level 2</a>
    <a href="https://codd.cs.gsu.edu/~cmccurley1/P2/level3.php">Level 3</a>
    <a href="https://codd.cs.gsu.edu/~cmccurley1/P2/level4.php">Level 4</a>
  </div>

<div class="login">
<form action="https://codd.cs.gsu.edu/~cmccurley1/P2/level1.php" method="post">
Username: <input name = "username" type = "text" size="20" maxlength="20"  />
Password: <input name = "password" type = "text" size="20" maxlength="20"  />
<input type="checkbox" id="level1" name="level1" value="Level 1">
<label for="level1"> Level 1</label><br>
<input type="checkbox" id="level2" name="level2" value="Level 2">
<label for="level2"> Level 2</label><br>
<input type="checkbox" id="level3" name="level3" value="Level 3">
<label for="level3"> Level 3</label><br>
<input type="checkbox" id="level4" name="level4" value="Level 4">
<label for="level4"> Level 4</label><br>
<input type = "submit" name = "submit" value = "submit" />
</form>
</div>


</body>
</html>
