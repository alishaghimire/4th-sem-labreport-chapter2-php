<?php
$err = [];
$num = "";
$result = "";

// Validation
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['num']) && trim($_POST['num']) !== "") {
        $num = intval($_POST['num']);
    } else {
        $err['num'] = 'Number is required.';
    }

    // If no validation errors, compute result
    if (empty($err)) {
        function diff51($n) {
            $diff = abs($n - 51);
            if ($n > 51) {
                return 3 * $diff;
            }
            return $diff;
        }

        $value = diff51($num);
        $result = "Result: $value";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Difference Calculator</title>
</head>
<body>

<h2>Difference Calculator</h2>

<form method="post">
    <label for="num">Enter a Number:</label>
    <input type="number" name="num" id="num" 
           value="<?php echo isset($num) ? $num : ''; ?>" />
    <?php echo isset($err['num']) ? "<span style='color:red;'>{$err['num']}</span>" : ''; ?>
    <br><br>

    <input type="submit" value="Calculate">

    <?php
    if (!empty($result)) {
        echo "<h3>$result</h3>";
    }
    ?>
</form>

</body>
</html>
