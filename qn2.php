<?php
define("PI", 3.1416);

$err = [];
$radius = "";
$areaResult = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['radius']) && !empty($_POST['radius']) && trim($_POST['radius'])) {
        $radius = floatval($_POST['radius']);
        if ($radius < 0) {
            $err['radius'] = 'Radius cannot be negative.';
        }
    } else {
        $err['radius'] = 'Radius is required.';
    }

    if (empty($err)) {
        function calculateCircleArea($r) {
            return PI * $r * $r;
        }

        $area = calculateCircleArea($radius);
        $areaResult = "The area of the circle with radius $radius is: $area";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Circle Area Calculator</title>
</head>
<body>

<h2>Calculate Area of Circle</h2>

<form method="post">
    <label for="radius">Radius:</label>
    <input type="number" name="radius" id="radius" value="<?php echo isset($radius) ? $radius : ''; ?>" />
    <?php echo isset($err['radius']) ? $err['radius'] : ''; ?><br><br>

    <input type="submit" value="Calculate Area">

    <?php
    if (!empty($areaResult)) {
        echo "<h3>$areaResult</h3>";
    }
    ?>
</form>

</body>
</html>