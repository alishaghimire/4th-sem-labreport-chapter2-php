<?php

function compareStringLength($str1, $str2) {
    if (strlen($str1) === strlen($str2)) {
        return true;  
    } else {
        return false; 
    }
}

$string1 = "hi";
$string2 = "world";

if (compareStringLength($string1, $string2)) {
    echo "True: Both strings have the same length.";
} else {
    echo "False: Strings have different lengths.";
}
?>
