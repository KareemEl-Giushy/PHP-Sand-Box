<?php
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["username"])){
      $user = $_POST["username"];
      $_SESSION["username"] = $user;
      echo "Hello $user. How are you. I hope you are fine";
    }
  }
  elseif (isset($_SESSION['username'])){
    echo "Hello " . $_SESSION['username'] . " you still there";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Session</title>
  </head>
  <body>
    <form class="" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
      <input type="text" name="username">
      <input type="submit">
    </form>
  </body>
</html>
