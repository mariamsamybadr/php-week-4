<?php
  $handle = fopen("marjin.txt", "r");

  // echo fgets($handle, 4);

  echo fread($handle, 1024);

  fclose($handle);