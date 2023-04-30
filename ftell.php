<?php

/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  - rewind(File[Required])
  --- Return The Pointer To The Beginning Of The File

  - ftell(File[Required])
  --- Return Current Position Of The Pointer

  - fseek(File[Required], Offset[Required], Whence[Optional] = SEEK_SET)
  --- Go To A Position
  --- Offset In Bytes
  --- SEEK_SET => Equal To Offset
  --- SEEK_CUR => Current + Offset
  --- SEEK_END => EOF + Offset [Accept Negative]
*/

$handle = fopen("marjin.txt", "r");

// echo ftell($handle) . "<br>"; // 0

// echo fgets($handle) . "<br>";

// echo fgets($handle) . "<br>";

// rewind($handle);

// echo fgets($handle) . "<br>"; // mariam

// echo ftell($handle) . "<br>"; // 6

echo fgets($handle) . "<br>"; // mariam

fseek($handle, -4, SEEK_END);

echo fgets($handle) . "<br>"; // mariam samy badr

fclose($handle);

echo mb_strlen("badr", "8bit");