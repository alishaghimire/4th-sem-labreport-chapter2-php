<?php
function isDivisibleBy5($n) {
    return $n % 5 === 0;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number = intval($_POST["number"]);
    $result = isDivisibleBy5($number);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Divisibility Checker</title>
</head>
<body>

<h2>Check if a Number is Divisible by 5</h2>

<form method="post" action="">
    <label for="number">Number:</label>
    <input type="number" name="number" id="number" value="<?php echo isset($number) ? $number : ''; ?>" required>
    <br><br>
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "<p>$number is " . ($result ? "" : "not ") . "divisible by 5.</p>";
    echo "<h3>Total Points: " . ($result ? "true" : "false") . "</h3>";
}
?>

</body>
</html>