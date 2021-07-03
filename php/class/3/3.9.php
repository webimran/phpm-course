<?php
    $name = '';

    if(isset($name)){
        echo "Name is set";
    }else{
        echo "Name is empty";
    }

    echo "\n";

    if(empty($name)){
        echo "Name is empty";
    }else{
        echo "Name is set";
    }

    echo "\n";

    if(isset($name) && (is_numeric($name) || $name != '')){
        echo "Name is set and it's not empty";
    }else{
        echo "Name is either not set ot it's empty";
    }