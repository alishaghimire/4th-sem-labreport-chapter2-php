<?php
function recursiveStrLen($str, $index = 0) {

    if (!isset($str[$index])) {
        return 0;
    }

    return 1 + recursiveStrLen($str, $index + 1);
}


$input = "Alisha Khatri";
echo "Length of '$input' is: " . recursiveStrLen($input);
?>