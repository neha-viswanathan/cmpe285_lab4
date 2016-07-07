<?php

//php function to validate seller and product name using regex
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sellerName = $_POST["seller"];
    if (empty($sellerName)) {
        echo "Seller Name is required!<br/><br/><br/>";
    } else {
        if (checkSell($sellerName)) {
            echo "Seller Name " . $sellerName . " meets pattern match requirements! <br/><br/><br/>";
        } else {
            echo "Seller Name " . $sellerName . " does not meet pattern match requirements! <br/><br/>
   Name must contain leading alphabet and other characters can be alphanumeric. 
   Length must be equal to or less than 16 characters. <br/><br/><br/>";
        }
    }
    $prodName = $_POST["product"];
    if (empty($prodName)) {
        echo "Product Name is required!<br/><br/><br/>";
    } else {
        if (checkProd($prodName)) {
            echo "Product Name " . $prodName . " meets pattern match requirements! <br/><br/><br/>";
        } else {
            
            echo "Product Name " . $prodName . " does not meet pattern match requirements! <br/><br/>
   Name must contain leading alphabet and other characters can be alphanumeric. No special characters ~!@#\$%^&*()`\" are allowed. 
   Length must be equal to or less than 200 characters. <br/><br/><br/>";
        }
    }
}

//php function for checking product name using regex
/* /^[a-zA-Z]([a-zA-z0-9\s])[^~!@#\$%^&*()`"]{0,199}$/
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
    if (strlen($prodName) > 200) {
        return false;
    } else {
        if ($returnProd == 1) {
            return true;
        } else {
            return false;
        }
    }
}

//php function for checking seller name using regex
/* /^[a-zA-Z]([a-zA-z0-9\s]){0,15}$/
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
    if (strlen($sellerName) > 16) {
        return false;
    } else {
        if ($retSeller == 1) {
            return true;
        } else {
            return false;
        }
    }
}
?>