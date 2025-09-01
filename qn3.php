<?php
$err = [];
$minutes = "";
$secondsResult = "";

// Validation
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['minutes']) && !empty($_POST['minutes']) && trim($_POST['minutes'])) {
        $minutes = floatval($_POST['minutes']);
        if ($minutes < 0) {
            $err['minutes'] = 'Minutes cannot be negative.';
        }
    } else {
        $err['minutes'] = 'Minutes is required.';
    }

    if (empty($err)) {
        function convertToSeconds($min) {
            return $min * 60;
        }

        $seconds = convertToSeconds($minutes);
        $secondsResult = "$minutes minute is equal to $seconds second.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Minutes to Seconds Converter</title>
</head>
<body>

<h2>Convert Minutes to Seconds</h2>

<form method="post">
    <label for="minutes">Enter Minutes:</label>
    <input type="number" name="minutes" id="minutes" value="<?php echo isset($minutes) ? $minutes : ''; ?>" />
    <?php echo isset($err['minutes']) ? $err['minutes'] : ''; ?><br><br>

    <input type="submit" value="Convert">

    <?php
    if (!empty($secondsResult)) {
        echo "<h3>$secondsResult</h3>";
    }
    ?>
</form>

</body>
</html>