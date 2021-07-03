<?php
    $fruits = ['apple', 'mango', 'lemon', 'Banana', 'pineapple'];

    function fruits($fruits, $sfruits){
        foreach($fruits as $fruit){
            $selected = '';
            $$fruit = strtolower($fruit);
            if(in_array($fruit, $sfruits)){
                $selected = 'selected';
            }
            printf("<option value='%s' %s>%s</option>", $fruit, $selected, ucwords($fruit));
        }
    }

    function isCheckedbox($inputValue, $value){
        if(is_array($inputValue) && in_array($value, $inputValue)){
            echo " checked";
        }
    }