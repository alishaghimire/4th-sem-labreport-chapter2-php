<?php
$err = [];
$base = $height = $shape = "";
$areaResult = "";

// Validation
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

    if (isset($_POST['shape']) && !empty($_POST['shape']) && trim($_POST['shape'])) {
        $shape = strtolower(trim($_POST['shape']));
        if ($shape !== "triangle" && $shape !== "parallelogram") {
            $err['shape'] = 'Shape must be triangle or parallelogram.';
        }
    } else {
        $err['shape'] = 'Shape is required.';
    }

    
    if (empty($err)) {
        function calculateArea($base, $height, $shape) {
            if ($shape === "triangle") {
                return 0.5 * $base * $height;
            } elseif ($shape === "parallelogram") {
                return $base * $height;
            }
            return 0;
        }

        $area = calculateArea($base, $height, $shape);
        $areaResult = "The area of the $shape is: $area";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Area Calculator</title>
</head>
<body>

<h2>Calculate Area</h2>

<form method="post">
    <label for="base">Base:</label>
    <input type="number" step="0.01" name="base" id="base" value="<?php echo isset($base) ? $base : ''; ?>" />
    <?php echo isset($err['base']) ? $err['base'] : ''; ?><br><br>

    <label for="height">Height:</label>
    <input type="number" step="0.01" name="height" id="height" value="<?php echo isset($height) ? $height : ''; ?>" />
    <?php echo isset($err['height']) ? $err['height'] : ''; ?><br><br>

    <label for="shape">Shape:</label>
    <select name="shape" id="shape">
        <option value="">--Select--</option>
        <option value="triangle" <?php echo ($shape === "triangle") ? "selected" : ""; ?>>Triangle</option>
        <option value="parallelogram" <?php echo ($shape === "parallelogram") ? "selected" : ""; ?>>Parallelogram</option>
    </select>
    <?php echo isset($err['shape']) ? $err['shape'] : ''; ?><br><br>

    <input type="submit" value="Calculate Area">

    <?php
    if (!empty($areaResult)) {
        echo "<h3>$areaResult</h3>";
    }
    ?>
</form>

</body>
</html>