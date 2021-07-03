<?php
    $person = array('Kamal', 'Jamal', 'Delowar', 'Imran', 'Maruf');

    $n = count($person);

    for($i=0;$i<$n;$i++){
        echo $person[$i]."\n";
    }
    echo PHP_EOL;
    for($i=$n-1;$i>=0;$i--){
        echo $person[$i]."\n";
    }