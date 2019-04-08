<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="if.php" method="post">
      Male : <input type="checkbox" value="male" name="m"><br><br>
      Female : <input type="checkbox" value="female" name="f"><br><br>
      <input type="submit">
    </form>
    <?php
      $male = $_POST["m"];
      $female = $_POST["f"];
      if($male == true && $female == false){
        echo "<br>You Are Male";
      }elseif($female == true && $male == false){
        echo "<br>You Are Female";
      }elseif($male == true && $female == true){
        echo "<br>Erorr";
      }
    ?>
  </body>
</html>
