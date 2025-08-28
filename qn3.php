<?php
function convertToSeconds($minutes) {
    return $minutes * 60;
}

$inputMinutes = 7;
$seconds = convertToSeconds($inputMinutes);
echo "$inputMinutes minutes = $seconds seconds";
?>