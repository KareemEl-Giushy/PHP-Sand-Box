<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="calc.php" method="get">
      <input type="text" name = "num1">
      <br>
      <br>
      <input type="text" name = "num2">
      <br>
      <br>
      <input type="submit">
    </form>
    <?php
      $re = $_GET["num1"] + $_GET["num2"];
      echo "<h3>" . "The Result is " . $re . "</h3>";
    ?>
  </body>
</html>
