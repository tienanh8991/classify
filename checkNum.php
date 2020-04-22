<?php
function checkNumber($arr,$strNumber)
{
    for ($i = 0 ; $i < count($arr) ; $i++ ){
        if ($strNumber == $arr[$i]){
            return true;
        }
    }
    return false;
}