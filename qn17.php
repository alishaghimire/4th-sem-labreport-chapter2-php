<?php
$err = [];
$num1 = $num2 = "";
$result = "";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['num1']) && trim($_POST['num1']) !== "") {
        $num1 = intval($_POST['num1']);
    } else {
        $err['num1'] = 'First number is required.';
    }

    if (isset($_POST['num2']) && trim($_POST['num2']) !== "") {
        $num2 = intval($_POST['num2']);
    } else {
        $err['num2'] = 'Second number is required.';
    }

    
    if (empty($err)) {
        function computeSum($a, $b) {
            if ($a === $b) {
                return 3 * ($a + $b);
            }
            return $a + $b;
        }

        $sum = computeSum($num1, $num2);
        $result = "Result: $sum";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sum Calculator</title>
</head>
<body>

<h2>Sum Calculator</h2>

<form method="post">
    <label for="num1">First Number:</label>
    <input type="number" name="num1" id="num1" 
           value="<?php echo isset($num1) ? $num1 : ''; ?>" />
    <?php echo isset($err['num1']) ? "<span style='color:red;'>{$err['num1']}</span>" : ''; ?>
    <br><br>

    <label for="num2">Second Number:</label>
    <input type="number" name="num2" id="num2" 
           value="<?php echo isset($num2) ? $num2 : ''; ?>" />
    <?php echo isset($err['num2']) ? "<span style='color:red;'>{$err['num2']}</span>" : ''; ?>
    <br><br>

    <input type="submit" value="Compute Sum">

    <?php
    if (!empty($result)) {
        echo "<h3>$result</h3>";
    }
    ?>
</form>

</body>
</html>
