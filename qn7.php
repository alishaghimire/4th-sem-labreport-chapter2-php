<!--
Create a function that takes voltage and current and returns the calculated power.
-->

<?php
function calculate_power($voltage, $current){
    $power = $voltage * $current;
    return $power;
}
$voltage = 230;
$current = 5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Power Calculation</h1>
    <p>Voltage: <?php echo $voltage; ?> V</p>
    <p>Current: <?php echo $current; ?> A</p>
    <p>Power: <?php echo calculate_power($voltage, $current); ?> W</p>
</body>
</html>