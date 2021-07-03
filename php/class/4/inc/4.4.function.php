<?php
    function isChecked($inputValue, $value){
        if(isset($_REQUEST[$inputValue]) && is_array($_REQUEST[$inputValue]) && in_array($value, $_REQUEST[$inputValue])){
            echo " checked";
        }
    }


    
    function isFruitsChecked($value){
        if(isset($_REQUEST['fruits']) && is_array($_REQUEST['fruits']) && in_array($value, $_REQUEST['fruits'])){
            echo " checked";
        }
    }