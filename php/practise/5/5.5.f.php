<?php
    function displayKey($value){
        printf("value='%s'", $value);
    }

    function scrambledData($orgnalData, $key){
        $orginalKey = "abcdefghijklmnopqrstuvwxyz1234567890";
        $data       = '';
        $lenth      = strlen($orgnalData);
        for($i=0;$i<$lenth;$i++){
            $orginalCar = $orgnalData[$i];
            $position   = strpos($orginalKey, $orginalCar);
            if($position !== false){
                $data .= $key[$position];
            }else{
                $data .= $orginalCar;
            }
        }

        return $data;
    }

    function decodedData($orgnalData, $key){
        $orginalKey = "abcdefghijklmnopqrstuvwxyz1234567890";
        $data       = '';
        $lenth      = strlen($orgnalData);
        for($i=0;$i<$lenth;$i++){
            $orginalCar = $orgnalData[$i];
            $position   = strpos($key, $orginalCar);
            if($position !== false){
                $data .= $orginalKey[$position];
            }else{
                $data .= $orginalCar;
            }
        }

        return $data;
    }
