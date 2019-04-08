<?php
  $cars = ["volvo", "BMW", "Lamporgyny", "Ferary"];
  $ob = ["Name"=>"Jhon", "Job"=>"Designer"];
  echo "Data Type Is " . gettype($cars) . "<br><br>";
  echo $ob["Job"] . "<br><br>";
  for($i = 0; $i < count($cars); $i++){
    echo $cars[$i] . "<br><br>";
  }
  if( 8 <= 6){
    echo "Yes";
  }else {
    echo "No<br>";
  }

  //  Search Functions

  echo in_array("Ferary", $cars) . "<br>"; // Always prints 1 if it is true

  echo array_search("Ferary", $cars) . "<br>"; // Prints the index of the element
  //------------------
  $array_key = 3;
  if(array_key_exists($array_key, $cars)){ // Must be the index if it isnot an assossiative Array
      echo "Yes I found It => " . $cars[$array_key] . "<br><br>";
  }
  //-----------------------
  if(array_key_exists("Name", $ob)){ // Must put the key to check the assossiative array
      echo "Yes I found It => " . $ob["Name"] . "<br><br>";
  }

  // Put new values in the array

  array_push($cars, "kia", "MINI", "Jeep"); // Add in the last of the array
  echo "<pre>";
  print_r($cars);
  echo "</pre>";
  //----------------------
  array_unshift($cars, "kia", "MINI", "Jeep"); // Add in the front of the array
  echo "<pre>";
  print_r($cars);
  echo "</pre>";

  //Remove from the array
  echo "string";
  $the_value = array_pop($cars);
  echo "<pre>";
  print_r($cars);
  echo "</pre>";
  echo $the_value . "<br><br>";
  //-------------------
  $the_value = array_shift($cars);
  echo "<pre>";
  print_r($cars);
  echo "</pre>";
  echo $the_value . "<br><br>";
