<?php

$zipcode =array('65363','920384','887839');

foreach($zipcode as $item){
    if(validZip($item))
        echo "$item is valid <br>";
    else
        echo "$item not valid <br>";
}


function validZip($str) {
    

$regex = '/^\d{5}$/';
return preg_match($regex,$str);

}

function validText($str){
    
    $regex='/^[a-z]*$/i';
    
    return preg_match($regex,$str);
}

$names =array('WELCOME','Hi','Bye', 'H1LL0');

foreach($names as $item){
    if(validText($item))
        echo "$item is valid <br>";
    else
        echo "$item not valid <br>";
}

function validSid($str){
    $regex='/^\d{3}-?\d{2}-?\d{4}$/';
    
    return preg_match($regex,$str);
}

$studentID=array('663-22-1832','78374-238433','833-2-9392', '834-24-2342');

foreach($studentID as $item){
    if(validSid($item))
        echo "$item is valid <br>";
    else
        echo "$item not valid <br>";
}



