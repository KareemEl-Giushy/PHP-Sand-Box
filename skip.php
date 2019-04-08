<?php
  $str = "thi\s i\\\\s\\ \a \strin\"g by kareem";
  echo $str . "<br><br>";
  $db = addslashes($str); // To Safety store in the database with out any errors;
  echo $db;
