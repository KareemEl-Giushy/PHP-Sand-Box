<?php
  // Copy and rename for files not folder (directory)
  if (file_exIsts(__DIR__ . "/kareem/kareem_new.txt")) {
    echo "It's There";
    file_put_contents(__DIR__ . "/kareem/kareemh.txt", "");
    rename(__DIR__ . "/kareem/kareemh.txt", __DIR__ . "/Ahmed.txt");
  }else {
    copy(__DIR__ . "/kareem/kareem.txt", __DIR__ . "/kareem/kareem_new.txt");
    echo "Created";
  }
