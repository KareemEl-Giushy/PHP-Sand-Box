<?php
  $nums = array(1 => "one", 2 => "two", 3 => "three", 4 => "four", 5 => "five");
  echo "<ul>";
  foreach ($nums as $key) {
    echo "<li>" . $key . "</li>";
  }
  foreach ($nums as $key =>$value) {
    echo "<li>" . $key . "</li>";
  }
  echo "</ul>";
  echo "hello world";
  include "grade.php";
