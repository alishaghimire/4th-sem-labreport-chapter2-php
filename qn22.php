<?php
function wrapWithFirstThree($str) {
    $prefix = substr($str, 0, 3); 
    return $prefix . $str . $prefix;
}


$inputs = ["Python", "JS", "Code"];

foreach ($inputs as $input) {
    echo wrapWithFirstThree($input) . "<br>";
}
?>