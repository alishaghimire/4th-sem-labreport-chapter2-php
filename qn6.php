<?php
$err = [];
$age_days = '';
function age($age_years){
    return $age_years * 365;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['age']) && !empty($_POST['age']) && trim($_POST['age']) !== '') {
        $age_years = $_POST['age'];

        // Check if input is a valid number
        if (is_numeric($age_years) && $age_years >= 0) {
            $age_days = age($age_years);
        } else {
            $err['age'] = 'Enter a valid non-negative number';
        }
    } else {
        $err['age'] = 'Enter your age in years';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Age Calculator</title>
</head>
<body>
    <h1>Calculate Age in Days</h1>
    <form method="POST">
        <label for="age">Age in Years:</label>
        <input type="number" name="age" id="age" placeholder="Enter your age"
               value="<?php echo isset($_POST['age']) ? htmlspecialchars($_POST['age']) : ''; ?>" />
        <?php echo isset($err['age']) ? "<p style='color:red;'>{$err['age']}</p>" : ''; ?>
        <br><br>
        <input type="submit" value="Convert to Days">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($err)) {
        echo "<p><strong>$age_years years</strong> = <strong>$age_days days</strong></p>";
    }
    ?>
</body>
</html>