<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="grade.php" method="post">
      <input type="text" name="namey">
      <input type="submit">
    </form>
    <?php
      $grade = $_POST["namey"];
      switch ($grade) {
        case 'A':
          echo "You are amazing";
          break;
        case "B":
          echo "You did pretty good";
          break;
        case "C":
          echo "You did poorly";
          break;
        default:
          echo "Invalid Grade";
          break;
      }
    ?>
  </body>
</html>
