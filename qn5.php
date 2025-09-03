<?php
$err = [];
$base = $height = "";
$areaResult = "";

// Validation
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['base']) && trim($_POST['base']) !== "") {
        $base = floatval(trim($_POST['base']));
        if ($base <= 0) {
            $err['base'] = "Base must be a positive number.";
        }
    } else {
        $err['base'] = "Base is required.";
    }

    if (isset($_POST['height']) && trim($_POST['height']) !== "") {
        $height = floatval(trim($_POST['height']));
        if ($height <= 0) {
            $err['height'] = "Height must be a positive number.";
        }
    } else {
        $err['height'] = "Height is required.";
    }

    if (empty($err)) {
        function triangleArea($base, $height) {
            return 0.5 * $base * $height;
        }

        $area = triangleArea($base, $height);
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