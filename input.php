<?php

$_POST['number'];
echo identifyEvenOrOddNumber($_POST['number']);

function is_odd($number){
    if( ($number%2)==0){
        return "even number";
    }else{
        return "odd number";
    }
}


