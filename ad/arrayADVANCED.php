<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="array.php" method="post">
      Student Name :- <input type="text" name="name[]"><br><br>
      Mark :- <input type="text" name="mark[]"><br><br>
      <input type="submit">
    </form>
    <?php
      $marks = $_POST["name"];
      $a = $_POST["aa"];
      echo $marks[$a];
    ?>
  </body>
</html>
