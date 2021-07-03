<?php
    function displayKey($key){
        printf("value='%s'", $key);
    }

    function scrambledData($orginalData, $key){
        $orginalKey = 'abcdefghijklmnopqrstuvwxyz1234567890';
        $data       = '';
        $lenth      = strlen($orginalData);
        for($i=0; $i<$lenth; $i++){
            $orginalCar = $orginalData[$i];
            $position = strpos($orginalKey, $orginalCar);
            if($position !== FALSE){
                $data .=$key[$position];
            }else{
                $data .= $orginalCar;
            }
        }

        return $data;
    }

    
    function decodeData($orginalData, $key){
        $orginalKey = 'abcdefghijklmnopqrstuvwxyz1234567890';
        $data       = '';
        $lenth      = strlen($orginalData);
        for($i=0; $i<$lenth; $i++){
            $orginalCar = $orginalData[$i];
            $position = strpos($key, $orginalCar);
            if($position !== FALSE){
                $data .=$orginalKey[$position];
            }else{
                $data .= $orginalCar;
            }
        }

        return $data;
    }