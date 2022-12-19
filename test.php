<!DOCTYPE html>
<html>
<head>
  <title>Calculator</title>
  <style>
    button[type="submit"] {
  width: 50px;
  height: 50px;
}
  </style>
</head>
<body>
  <form method="post" action="">
    <input type="text" name="num1" value="<?php if (isset($_POST['num1'])) echo htmlspecialchars($_POST['num1']); ?>">
    <input type="text" name="num2" value="<?php if (isset($_POST['num2'])) echo htmlspecialchars($_POST['num2']); ?>">
    <button type="submit" name="operation" value="add">+</button>
<br>
    <button type="submit" name="num1" value="1">1</button>
    <button type="submit" name="num1" value="2">2</button>
    <button type="submit" name="num1" value="3">3</button>
    <button type="submit" name="num2" value="4">4</button>
    <button type="submit" name="num2" value="5">5</button>
    <button type="submit" name="num2" value="6">6</button>
    <button type="submit" name="num2" value="7">7</button>
    <button type="submit" name="num2" value="8">8</button>
    <button type="submit" name="num2" value="9">9</button>
  </form>
  <?php
    if (isset($_POST['operation']) && $_POST['operation'] == 'add') {
      $num1 = intval($_POST['num1']);
      $num2 = intval($_POST['num2']);
      $result = $num1 + $num2;
      echo "<p>Result: $result</p>";
    }
  ?>
