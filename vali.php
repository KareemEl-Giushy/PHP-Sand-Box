<?php
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['text'])){
      $input = $_POST['text'];
      if(filter_var($input, FILTER_VALIDATE_INT) == TRUE){
        echo "this is fine";
      }elseif (empty($input)){
        echo "Don't Let The Field Empty";
      }else {
        echo "don't cheat";
      }
    }
  }


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <input type="text" name="text">
      <input type="submit" value="send">
    </form>
  </body>
</html>
