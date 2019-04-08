<?php

  $str = "Hello World";
  echo "$str <br><br>";

  $arr = str_split($str, 11); // The second parameter is for How many letters are in one item
  echo "<pre>";
  print_r($arr);
  echo "<pre>";
  //-------------

  $cun = chunk_split($str, 2, "-*");
  print ($cun);
