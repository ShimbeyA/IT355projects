  <?php
    /* Name: Stacey Demecilio and Shimbey Assie
    CC-WWW-PPPP
    CC: alpha
    WW: digit
    PPPP: mixed
    */
    
    // test
    $parts = array ("AP-12-3507", // true
                    " ap-99-X109", // true
                    "SG-05-ab20", // true
                    "ab-22-N250", // false - category not correct
                    "SG-xx-N250", // false - warehouse not numeric
                    "SG-22-250", // false - part number not 4 characters
                    "SG-22-250*" // false - part number must be alphanumeroc
                   );
                    

    foreach ($parts as $part)
    {        
        validPart($part);
        echo "<br>";
        
        if (validPartRx($part) ){
            
            echo "$part is valid <br>";
        }
        else{
           echo "$part is not valid <br>";
           }
    }
    
    function validPart($part)
    {
        $names = trim(strtoupper($part));
        $bits = explode("-", $names);
        
        $category= $bits[0];
        $warehouseCode = $bits[1];
        $partNumber = $bits[2];
        
        if (ctype_alpha($category) == true && ($category == "HW" || $category == "SG" ||
                                  $category == "AP"))
        {
            if (ctype_digit($warehouseCode) == true)
            {
                if (ctype_alnum($partNumber) == true && strlen($partNumber) == 4)
                {
                    echo "$part is valid!";
                }
                
                else
                {
                    echo "$part is not valid!";
                }
            }
            
            else
            {
                echo "$part is not valid!";
            }
                
        }
        else
        {
            echo "$part is not valid!";
        }
    }
    
    function validPartRx($str)
    {
        $validPartRegex = '/ *[a-z]*-?\d{2}-?[a-z0-9]*/i';
        
        return preg_match($validPartRegex,$str);
    }
    
    
    $zipcode =array('65363','920384464','887839');
    
    foreach($zipcode as $item){
        if(validZip($item))
            echo "$item is valid <br>";
        else
            echo "$item not valid <br>";
    }
    
    
    function validZip($str) {
        
    
    $regex = '/^(\d{5}|\d{9})?$/';
    return preg_match($regex,$str);
    
    }
    
     $state =array('WA','ARR','NY');
    
    foreach($state as $item){
        if(validState($item))
            echo "$item is valid <br>";
        else
            echo "$item not valid <br>";
    }
    
    
    function validState($str) {
        
    
    $regex = '/^[a-z]{2}$/i';
    return preg_match($regex,$str);
    
    }
    
     $state =array('(206)-534-3235','302.32.454');
    
    foreach($state as $item){
        if(validNumber($item))
            echo "$item is valid <br>";
        else
            echo "$item not valid <br>";
    }
    
    
    function validNumber($str) {
        
    
    $regex = '/^((([0-9]{1})*[- .(]*([0-9]{3})[- .)]*[0-9]{3}[- .]*[0-9]{4})+)*$/';
    return preg_match($regex,$str);
    }
   
?>