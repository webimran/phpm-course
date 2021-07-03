<?php
    $student = array(
        'Mamun',
        'Kamal',
        'Imran',
        'Ranee'
    ); 
    $n = count($student);
    for($i=0;$i<$n; $i++){
        echo $student[$i]."\n";
    }
    echo PHP_EOL;
    
    for($i=$n-1;$i>=0; $i--){
        echo $student[$i]."\n";
    }