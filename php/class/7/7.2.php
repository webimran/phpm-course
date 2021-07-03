<?php
   $filename = "/Users/Imran Hossain/Desktop/2020/php/class/7/f2.txt";
   $fr1 = file_get_contents($filename);
   $file = fopen($filename, "w");

   fwrite($file, $fr1);
   fwrite($file, "Imran\n");
   fwrite($file, "Simran\n");

   fclose($file);

   $fr = file_get_contents($filename);

   echo $fr;