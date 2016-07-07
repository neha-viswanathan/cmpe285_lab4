<?php

//php function for checking product name using regex
/*  /^[a-zA-Z][^~!@#\$%^&*()`"]{0,199}$/
^ - Start of expression
[a-zA-Z] - First character must be an alphabet, either lowercase or uppercase
[^~!@#\$%^&*()`"] - ^ at the beginning represents excluding the special characters in the string
{0, 199} - Number of characters must be 200
$ - end of expression 

*/
function checkProd($prodName)
{
    //echo "Checking for Product Name Pattern Match <br/><br/><br/>";
    $patternProd = '/^[a-zA-Z][^~!@#\$%^&*()`"]{0,199}$/';
    $returnProd  = preg_match($patternProd, $prodName);
    if ($returnProd == 1) {
        echo '<b>Valid Product Name - </b>' . $prodName;
    } else {
        if (strlen($prodName) > 200) {
            echo '<b>String length is </b>' . strlen($prodName);
            echo '<br/>';
        }
        echo '<b>Invalid Product Name - </b>' . $prodName;
    }
}

//php function for checking seller name using regex
/*  /^[a-zA-Z][a-zA-z0-9\s]{0,15}$/
^ - Start of expression
[a-zA-Z] - First character must be an alphabet, either lowercase or uppercase
([a-zA-z0-9\s]) - Only alphabets(lowercase/uppercase), digits and any whitespace are allowed
{0, 15} - Number of characters must be 16
$ - end of expression 

*/
function checkSell($sellerName)
{
    //echo "Checking for Seller Name Pattern Match <br/><br/><br/>";
    $patternSell = '/^[a-zA-Z][a-zA-z0-9\s]{0,15}$/';
    $retSeller   = preg_match($patternSell, $sellerName);
    if ($retSeller == 1) {
        echo '<b>Valid Seller Name - </b>' . $sellerName;
    } else {
        if (strlen($sellerName) > 16) {
            echo '<b> String length is </b>' . strlen($sellerName);
            echo '<br/>';
        }
        echo '<b>Invalid Seller Name - </b>' . $sellerName;
    }
}
?>