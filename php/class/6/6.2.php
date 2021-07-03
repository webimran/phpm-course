<?php
    // ASCII
    for($i=0;$i<129; $i++){
        echo $i ." = ". chr($i)."\n";
    } 

    echo "A = ". ord('A');
    echo PHP_EOL;
    echo "a = ".ord('a');