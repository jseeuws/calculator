<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>calculator</title>
</head>
<body>
  <form>
<input type="text" name="num1" placeholder="number1">
<input type="text" name="num2" placeholder="number2">
<select name="operator">
<option>none</option>
<option>add</option>
<option>subtract</option>
<option>multiply</option>
<option>divide</option>
</select>
<br>
<button name="submit" value="submit" type="submit">calculate</button>
</form>
<p>the answer is:</p>
<?php
if (isset($_GET['submit'])){
     $result1 = $_GET['num1'];
     $result2 = $_GET['num2'];
     $operator = $_GET['operator'];

switch ($operator) {
  case "none":
    echo "you need to select a method!";
  break;
  case "add":
    echo $result1 + $result2;
  break;
  case "subtract":
    echo $result1 - $result2;
  break;
  case "multiply":
    echo $result1 * $result2;
  break;
  case "divide":
    echo $result1 / $result2;
  break;
}}
?>


</body>
</html>