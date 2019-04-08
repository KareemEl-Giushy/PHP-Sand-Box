<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="me.php" method="get">
      <label>Color :-</label>
      <input type="text" name = "color">
      <br>
      <br>
      <label>Plu :-</label>
      <input type="text" name = "plu">
      <br>
      <br>
      <label>Cela :-</label>
      <input type="text" name = "cela">
      <br>
      <br>
      <input type="submit">
    </form>
    <?php
      $color = $_GET["color"];
      $plu = $_GET["plu"];
      $cela = $_GET["cela"];
      echo "<h2>Roses are $color</h2>";
      echo "<h2>$plu are blue</h2>";
      echo "<h2>I love $cela</h2>";
    ?>
  </body>
</html>
