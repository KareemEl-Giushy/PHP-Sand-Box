<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="check.php" method="post">
      Apples :- <input type="checkbox" name="f[]" value="Apples"><br><br>
      Orange :- <input type="checkbox" name="f[]" value="Orange"><br><br>
      Onines :- <input type="checkbox" name="f[]" value="Onines"><br><br>
      <input type="submit">
    </form>
    <?php
      $f = $_POST["f"];
      echo "<h2>" . $f[0] . "</h2>";
    ?>
  </body>
</html>
