<?php
  $un = array("kareem", "ahmed", "heba", "kareem", "ahmed", "heba");
  echo "<pre>";
  print_r($un);
  echo "</pre>";
  //-------------
  $uni = array_unique($un);
  echo "<pre>";
  print_r($uni);
  echo "</pre>";
  //-----------
  $array = array_fill(0, 10, array_unique(array_fill(0, 20, "SEco")));
  echo "<pre>";
  print_r($array);
  echo "</pre>";
  //-----------
  $uniq = array_unique($array);
  echo "<pre>";
  print_r($uniq);
  echo "</pre>";
