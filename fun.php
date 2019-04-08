<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="fun.php" method="post">
      square :- <input type="number" name="num">
      <input type="submit">
    </form>
    <?php
      function salute ($name){
        echo "<br> Hello $name <br>";
      }
      function re (){
        $num = $_POST["num"];
        return $num**2;
      }
      echo re();
      salute("Kareem");
    ?>
  </body>
</html>
