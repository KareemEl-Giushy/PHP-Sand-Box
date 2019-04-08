<?php
  $ra = array("kemoo", "osama", "ahmed", "hassan");
  echo "<pre>";
  print_r($ra);
  echo "</pre>";
  //-------------
  $rand = array_rand($ra, 3);
  echo "<pre>";
  print_r($rand);
  echo "</pre>";
  echo $ra[$rand[0]] . "<br><br>"; // You use the random number that in the array => rand to call the item from array => ra
  echo $ra[$rand[1]] . "<br><br>";
  echo $ra[$rand[2]] . "<br><br>";

  // Genius idea
