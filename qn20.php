<?php
function repeatFrontChars($str) {
    if (strlen($str) < 2) {
        return $str;
    }

    $front = substr($str, 0, 2);
    return str_repeat($front, 4);
}


$inputs = ["C Sharp", "JS", "a"];

foreach ($inputs as $input) {
    echo repeatFrontChars($input) . "<br>";
}
?>