<?php
$err = [];
$people = "";
$carsResult = "";

// Validation
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['people']) && trim($_POST['people']) !== "") {
        $people = intval($_POST['people']);
        if ($people < 0) {
            $err['people'] = 'Number of people must be 0 or greater.';
        }
    } else {
        $err['people'] = 'Number of people is required.';
    }
    if (empty($err)) {
        function carsNeeded($n) {
            return ceil($n / 5);
        }

        $cars = carsNeeded($people);
        $carsResult = "For $people people, you need $cars car(s).";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Car Calculator</title>
</head>
<body>

<h2>Car Calculator</h2>

<form method="post">
    <label for="people">Number of People:</label>
    <input type="number" name="people" id="people" 
           value="<?php echo isset($people) ? $people : ''; ?>" />
    <?php echo isset($err['people']) ? $err['people'] : ''; ?>
    <br><br>

    <input type="submit" value="Calculate Cars">

    <?php
    if (!empty($carsResult)) {
        echo "<h3>$carsResult</h3>";
    }
    ?>
</form>

</body>
</html>
