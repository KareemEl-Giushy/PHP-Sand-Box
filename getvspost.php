<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="getvspost.php" method="post">
      <label>Password :-</label>
      <input type="password" name="pass">
      <input type="submit">
    </form>
    <?php
      $pass = $_POST["pass"];
      if($pass == "123456789"){
        echo "Hello";
      }else {
        echo "Go Away";
      }
    ?>
  </body>
</html>
