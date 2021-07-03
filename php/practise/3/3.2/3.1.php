<?php
    $person = array('Kamal', 'Jamal', 'Delowar', 'Imran', 'Maruf');

    $total = count($person);

    for($i=0;$i<$total;$i++){
        echo $person[$i]."\n";
    }
    echo PHP_EOL;
    for($i=$total-1;$i>=0;$i--){
        echo $person[$i]."\n";
    }