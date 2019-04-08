<?php
/*
    explode(Separetor, Array);
    implode(Separetor(optional), Array);
*/
  $str = "Hello World !";
  echo "$str <br><br>";

  $arr = explode(" ", $str, 1); // it's limit is 1 (1 items)
  echo "<pre>";
  print_r($arr);
  echo "</pre>";
  //----------------
  // The opposite of explode
  $array = ["hamada", "syied", "hassan", "kareem"];
  echo "<pre>";
  print_r($array);
  echo "</pre>";

  $stri = implode("<br><br>",$array); // The separator is optional And it creat a space (or any thing "<br>", ",", " ", etc) between the words
  echo "<pre>";
  print_r($stri);
  echo "</pre>";
