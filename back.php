<?php
  $name = "Kareem Salem";
  $aca = "Code Academy";
  echo "<p>",Strlen($name), "<br>";
  echo strToUppEr($name),"<br>";
  echo $name[0],"<br>";
  echo STr_ReplacE("Kareem", "Heba", $name),"<br>";
  echo subStr($aca, 5), "<br>";
  echo subStr($aca, 5, 3), "<br>";
  echo sqrt(144), "<br>";
  echo max(144,30,160), "<br>";
  echo min(144,30,160), "<br>";
  echo round(3.699), "<br>";
  echo floor(3.699), " No MAtter IF it less than .5 -1", "<br>";
  echo ceil(3.33333), " No MAtter IF it less than .5 +1", "<br>";
  echo 5**5, "<br>";
  echo "تمت العمليه بنجاح", "<br>";
/*-----------------------------------------------------*/
  $arr = ["html","css","js","php"];
  echo "<ul>";
  for($i = 0;$i < 4;$i++){
    echo "<li>", $arr[$i], "</li>";
  }
  echo "</ul>";
  $color = "brown";
  switch ($color) {
    case 'red':
      echo "<h4>This is red</h4>";
      break;
    case 'green':
      echo "<h4>This is green</h4>";
      break;
    default:
      echo "<h4>This is. I don't know</h4>";
      break;
  }
  echo "<ul>";
  $i = 0;
  while($i < 4){
    echo "<li>", $arr[$i], "</li>";
    $i++;
  }
  echo "</ul>";
