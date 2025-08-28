<?php
function getValueAtIndex($array, $index) {
    if (isset($array[$index])) {
        return $array[$index];
    } else {
        return "Index out of range";
    }
}


$colors = ["red", "green", "blue", "yellow"];
echo getValueAtIndex($colors, 2); 
echo "<br>";
echo getValueAtIndex($colors, 5); 
?>
