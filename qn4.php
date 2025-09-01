<?php
$err = [];
$num1 = $num2 = "";
$sumResult = "";

// Validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['num1']) && trim($_POST['num1']) !== "") {
        $num1 = floatval($_POST['num1']);
    } else {
        $err['num1'] = 'First number is required.';
    }

    if (isset($_POST['num2']) && trim($_POST['num2']) !== "") {
        $num2 = floatval($_POST['num2']);
    } else {
        $err['num2'] = 'Second number is required.';
    }

    if (empty($err)) {
        function addNumbers($a, $b) {
            return $a + $b;
        }

        $sum = addNumbers($num1, $num2);
        $sumResult = "The sum of $num1 and $num2 is: $sum";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sum</title>
</head>
<body>
    <h2>Calculate Sum of Two Numbers</h2>

<form method="post">
    <label for="num1">First Number:</label>
    <input type="number" name="num1" id="num1" value="<?php echo $num1; ?>" />
    <?php echo isset($err['num1']) ? $err['num1'] : ''; ?><br><br>

    <label for="num2">Second Number:</label>
    <input type="number" name="num2" id="num2" value="<?php echo $num2; ?>" />
    <?php echo isset($err['num2']) ? $err['num2'] : ''; ?><br><br>

    <input type="submit" value="Calculate Sum">

    <?php
    if (!empty($sumResult)) {
        echo "<h3>$sumResult</h3>";
    }
    ?>
</form>

</body>
</html>