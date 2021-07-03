<?php
    $students = array(
        'Mamun',
        'Kamal',
        'Imran',
        'Maruf',
        'Tarikul',
        'Ranee'
    );

    var_dump($students);

    $n = count($students);
    
    $student = array_shift($students);
    $student = array_pop($students);
    $student = array_unshift($students, "Simran");
    $student = array_push($students, "Ranee");
    $n = count($students);

    for($i=0;$i<$n; $i++){
        echo $students[$i]."\n";
    }


