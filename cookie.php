<?php
  //
  // setcookie("Kemoo", "testy", time() + 3600, "/", "localhost", false, true);
  // echo '<pre>';
  // print_r($_COOKIE);
  // echo '</pre>';
  // Cookies Practising It Is Awesome And Useful;
  $maincolor = "#FFF";
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $maincolor = $_POST["color"];
    $username = $_POST["name"];
    setcookie("bgcolor", $maincolor, time() + 3600, "/");
    setcookie("user", $username, time() + 3600, "/");
  }
  if (isset($_COOKIE["bgcolor"]) || isset($_COOKIE["user"])){
    $body = $_COOKIE["bgcolor"];
    $username = $_COOKIE["user"];
  }else{
    $body = $maincolor;
    $username = "";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cookies</title>
  </head>
  <body style="background-color: <?php echo $body; ?>">
    <form action="<?php $_SERVER[PHP_SELF]; ?>" method="post">
      <input type="color" name="color">
      <input type="text" name="name">
      <label><?php echo $username; ?></label>
      <input type="submit">
    </form>
  </body>
</html>
