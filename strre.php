<?php

  $str = "Hello World I love PHP";
  echo $str . '<br><br>';

  $re = str_replace("PHP", "JS", $str, $i);
  echo $re . "<br><br>";
  echo "The count of changs is :- " . $i;
  // you can use it in arrays either
  $arr = explode(" ", $str);
  echo "<pre>";
  print_r($arr);
  echo "</pre>";

  $im = implode(" ",$arr);
  echo $im;

  $re = str_replace("PHP", "JS", $arr, $i);
  echo "<pre>";
  print_r($re);
  echo "</pre>";
  echo "The count of changs is :- " . $i . "<br><br>";

  $im = implode(" ",$re);
  echo $im . "<br><br>";
  //----------------------
  $wor = "Hello World I love PHP";
  echo "$wor<br><br>";
  // $wore = str_replace(["Hello", "PHP", "I"], "Replaced",$wor, $c); // Exchange With one Word
  $wore = str_replace(["Hello", "PHP", "I"], ["Replaced", "hamada", "me"],$wor, $c); // Exchange with order
  echo $wore . "<br><br>";
  echo "The count of changs is :- " . $c . "<br><br>";
