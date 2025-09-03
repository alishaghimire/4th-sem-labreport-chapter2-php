<?php
$err = [];
$areaResult = "";

// Validation and calculation
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['base']) && !empty($_POST['base']) && trim($_POST['base'])) {
        $base = floatval($_POST['base']);
    } else {
        $err['base'] = 'Base is required.';
    }

    if (isset($_POST['height']) && !empty($_POST['height']) && trim($_POST['height'])) {
        $height = floatval($_POST['height']);
    } else {
        $err['height'] = 'Height is required.';
    }

    if (empty($err)) {
        function getTriangleArea($base, $height) {
            return 0.5 * $base * $height;
        }

        $area = getTriangleArea($base, $height);
        $areaResult = "The area of the triangle is: $area";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Triangle Area Calculator</title>
</head>
<body>

<h2>Triangle Area Calculator</h2>

<form method="post">
    <label for="base">Base:</label>
    <input type="number" step="any" name="base" id="base" value="<?php echo htmlspecialchars($base); ?>">
    <?php if (isset($err['base'])) echo "<p>" . $err['base'] . "</p>"; ?>
    <br><br>

    <label for="height">Height:</label>
    <input type="number" step="any" name="height" id="height" value="<?php echo htmlspecialchars($height); ?>">
    <?php if (isset($err['height'])) echo "<p>" . $err['height'] . "</p>"; ?>
    <br><br>

    <input type="submit" value="Calculate Area">
</form>

<?php
if (!empty($areaResult)) {
    echo "<h3>$areaResult</h3>";
}
?>

</body>
</html>