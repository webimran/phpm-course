<?php
  $persons = explode(', ', 'Kamal, Jamal, Delowar, Imran, Maruf');
  print_r($persons);
  
  $persons = preg_split("/(, |,)/", 'Kamal, Jamal, Delowar, Imran,Maruf');
  print_r($persons);

  $persons = join(", ", $persons);

  echo $persons;

  
 