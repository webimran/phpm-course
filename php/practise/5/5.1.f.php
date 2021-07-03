<?php
    function displayKey($key){
        printf("value='%s'", $key);
    }

    function scrambledData($orginalData, $key){
        $orginalKey = "abcdefghijklpnopqrstuvwxyz1234567890";
        $data = '';
        $lentch = strlen($orginalData);
        for($i=0;$i<$lentch;$i++){
            $curentCarectar =$orginalData[$i];
            $position = strpos($orginalKey, $curentCarectar);
            if($position !== false){
                $data .= $key[$position];
            }else{
                $data .= $curentCarectar;
            }
        }

        return $data;
    }
    function decodeData($orginalData, $key){
        $orginalKey = "abcdefghijklpnopqrstuvwxyz1234567890";
        $data = '';
        $lentch = strlen($orginalData);
        for($i=0;$i<$lentch;$i++){
            $curentCarectar =$orginalData[$i];
            $position = strpos($key, $curentCarectar);
            if($position !== false){
                $data .= $orginalKey[$position];
            }else{
                $data .= $curentCarectar;
            }
        }

        return $data;
    }