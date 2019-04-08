<?php
  if(is_dir("PHP")){
    echo "the file is exist already.<br><br>";
  }else{
    mkdir("PHP");
  }
  if(is_writable(__DIR__ . "/PHP/text.php")){
    file_put_contents(__DIR__ . "/PHP/text.php", "<?php echo \"My name is Kareem\";
    include(__DIR__ . \"/../arr.php\")
    ?>");
    chmod(__DIR__ . "/PHP/text.php", 0444);
    echo "You Can't write in this file.<br><br>";
  }else {
    echo "I Couldn't write in this file. But now I can<br><br>";
    chmod(__DIR__ . "/PHP/text.php", 0755);
  }
  //include __DIR__ . "/PHP/text.php";
  echo file_get_contents("arr.php");
