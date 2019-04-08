<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
    <form action="in.php" method="get">
      <label>Name :-</label>
      <input type="text" name="namey">
      <label>Age :-</label>
      <select name = "age">
        <?php
          $num = 0;
          for($num = 0;$num < 100;$num++){
            echo "<option>" . $num . "</option>";
          }
        ?>
      </select>
      <input type="submit">
    </form>
    <?php
      echo "<h4>" . "Yor name is " . $_GET["namey"] . "</h4>";
      echo "<h4>" . "Yor age is " . $_GET["age"] . " years old</h4>";
    ?>
  </body>
</html>
