<?php
function wrapWithFirstThree($str) {
    $prefix = substr($str, 0, 3); // Gets first 3 characters or fewer if string is short
    return $prefix . $str . $prefix;
}

// Sample Inputs
$inputs = ["Python", "JS", "Code"];

foreach ($inputs as $input) {
    echo wrapWithFirstThree($input) . "<br>";
}
?>