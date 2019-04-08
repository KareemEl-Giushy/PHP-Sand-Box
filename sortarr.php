<?php

  // -Sorting Arrays

  $langs = [
    "html",
    "css",
    "js",
    "jquery",
    "php",
  ];
  echo "<pre>";
  print_r($langs);
  echo "</pre>";
  //----------------
  echo "Sort";
  sort($langs); // Arrang It Alphabety (A - Z) default
  echo "<pre>";
  print_r($langs);
  echo "</pre>";
  //----------------
  echo "rsort";
  rsort($langs); // Arrang It Alphabety (A - Z) default reverse
  echo "<pre>";
  print_r($langs);
  echo "</pre>";

  // Assossiative array

  $langsa = [
    "html"    => 95,
    "css"     => 100,
    "js"      => 85,
    "jquery"  => 75,
    "php"     => 10,
  ];
  //---------------
  echo "asort";
  echo "<pre>";
  asort($langsa); // deal The Value
  print_r($langsa);
  echo "</pre>";
  //---------------
  echo "arsort";
  echo "<pre>";
  arsort($langsa); // reversed
  print_r($langsa);
  echo "</pre>";
  //---------------
  echo "ksort";
  echo "<pre>";
  ksort($langsa); // reversed
  print_r($langsa);
  echo "</pre>";
  //---------------
  echo "krsort";
  echo "<pre>";
  krsort($langsa); // reversed
  print_r($langsa);
  echo "</pre>";
