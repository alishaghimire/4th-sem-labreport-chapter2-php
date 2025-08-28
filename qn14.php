<?php
function findIndex($array, $string) {
    
    $index = array_search($string, $array);
    
    
    if ($index === false) {
        return -1;
    }
    
    return $index;
}

$fruits = ["apple", "banana", "cherry", "date"];
echo" index at:";
echo findIndex($fruits, "cherry"); 
echo "<br>";
echo" index at:";
echo findIndex($fruits, "mango");  
?>
