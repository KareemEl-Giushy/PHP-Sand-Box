<?php
  // Reverse Methods
  $langs = [
    "html",
    "css",
    "javascript",
    "php"
  ];
  echo "<pre>";
  print_r($langs);
  echo "</pre>";
  //---------------
  $rever = array_reverse($langs, true); // Reverse it but stay the index || false the opposite
  echo "<pre>";
  print_r($rever);
  echo "</pre>";
  //---------------
  shuffle($langs); // Random the items
  echo "<pre>";
  print_r($langs);
  echo "</pre>";
