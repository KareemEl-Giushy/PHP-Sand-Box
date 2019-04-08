<?php
  function namey($name){
      $namec = strlen($name);
      $temp_name = $name;
      for($i = 0;$i < $namec;$i++){
        // echo $i . substr($name, $i) . "<br>";
        $temp_name = str_replace($name[$i], $i+1, $temp_name);
        echo $temp_name . "<br>";
      }
  }
  namey("kareem");
