<?php
function wrapWithLastChar($str) {
    if (strlen($str) >= 1) {
        $lastChar = substr($str, -1);
        return $lastChar . $str . $lastChar;
    }
    return $str; // Optional: handle empty string if needed
}

// Sample Inputs
$inputs = ["Red", "Green", "1"];

foreach ($inputs as $input) {
    echo wrapWithLastChar($input) . "<br>";
}
?>