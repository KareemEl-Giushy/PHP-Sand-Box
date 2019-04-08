<?php
  if (is_dir("kareem")){
    if (file_exists(__DIR__ . "/kareem/kareem.txt")){
      echo file_get_contents(__DIR__ . "/kareem/kareem.txt") . "<br>";
      echo file_get_contents(__DIR__ . "/kareem/kareem.txt", false, null, 7) . "<br>";
      echo file_get_contents(__DIR__ . "/kareem/kareem.txt",  false, null, 7, 5) . "<br>";
      echo "getted";
    }else {
      file_put_contents("kareem/kareem.txt", "That's Me Hello");
      echo "The file was created";
    }
  }else{
    mkdir("kareem");
    echo "The directory was created";
  }
