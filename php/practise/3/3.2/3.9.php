<?php
    $name ='';

    if(isset($name)){
       echo "Name is not empty";
    }else{
        echo "Name is empty";
    }
    echo PHP_EOL;
    if(empty($name)){
        echo "Name is empty";
    }else{
        echo "Name is set";
    }

    echo PHP_EOL;

if(isset($name) && (is_numeric($name)|| $name != '')){
    echo "Name is not empty";
}else{
    echo "Name is empty";
}