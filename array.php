<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="array.php" method="post">
      <input type="text" name="aa">
      <input type="submit">
    </form>
    <?php
      $marks = ["mohammed"=>"A+", "Hamada"=>"C-"];
      $a = $_POST["aa"];
      echo $marks[$a];
    ?>
  </body>
</html>
