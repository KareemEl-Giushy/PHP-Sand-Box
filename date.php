<?php
  date_default_timezone_set("Africa/Cairo");
  echo date_default_timezone_get() . "<br>";
  $posttime = strftime("%F");
  echo $posttime;
