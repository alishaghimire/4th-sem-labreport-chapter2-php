<?php
$err = [];
$powerResult = "";

// Validation and calculation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['voltage']) && !empty($_POST['voltage']) && trim($_POST['voltage'])) {
        $voltage = floatval($_POST['voltage']);
    } else {
        $err['voltage'] = 'Voltage is required.';
    }

    if (isset($_POST['current']) && !empty($_POST['current']) && trim($_POST['current'])) {
        $current = floatval($_POST['current']);
    } else {
        $err['current'] = 'Current is required.';
    }

    if (empty($err)) {
        function calculatePower($voltage, $current) {
            return $voltage * $current;
        }

        $power = calculatePower($voltage, $current);
        $powerResult = "The calculated power is: $power Watts";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Power Calculator</title>
</head>
<body>

<h2>Electrical Power Calculator</h2>

<form method="post">
    <label for="voltage">Voltage (V):</label>
    <input type="number" name="voltage" id="voltage" step="any" value="<?php echo isset($voltage) ? $voltage : ''; ?>" />
    <?php echo isset($err['voltage']) ? $err['voltage'] : ''; ?><br><br>

    <label for="current">Current (A):</label>
    <input type="number" name="current" id="current" step="any" value="<?php echo isset($current) ? $current : ''; ?>" />
    <?php echo isset($err['current']) ? $err['current'] : ''; ?><br><br>

    <input type="submit" value="Calculate Power">
</form>

<?php
if (!empty($powerResult)) {
    echo "<h3>$powerResult</h3>";
}
?>

</body>
</html>