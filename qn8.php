  <?php
$err = [];
if (isset($_POST['chickens']) && !empty($_POST['chickens'])
&& trim($_POST['chickens'])) {
$chickens = $_POST['chickens'];
} else {
$err['chickens'] = 'Enter chicken number';
}
if (isset($_POST['cows']) && !empty($_POST['cows'])
&& trim($_POST['cows'])) {
$cows = $_POST['cows'];
} else {
$err['cows'] = 'Enter cows number';
}
if (isset($_POST['pigs']) && !empty($_POST['pigs'])
&& trim($_POST['pigs'])) {
$pigs = $_POST['pigs'];
} else {
$err['pigs'] = 'Enter pigs number';
}
        $total_legs = ($chickens * 2) + ($cows * 4) + ($pigs * 4);  
?>

<!DOCTYPE html>
<html>
<head>
    <title>Animal Leg Counter</title>
</head>
<body>
    <h2>Calculate Total Number of Legs</h2>
    <form method="post">
        <label for="chickens">Number of Chickens:</label>
        <input type="number" name="chickens" id="chickens" value="<?php echo isset($chickens)?$chickens:''; ?>" />
<?php echo isset($err['chickens'])?$err['chickens']:'' ?><br><br>

        <label for="cows">Number of Cows:</label>
        <input type="number" name="cows" id="cows" value="<?php echo isset($cows)?$cows:''; ?>" />
<?php echo isset($err['cows'])?$err['cows']:'' ?><br><br>

        <label for="pigs">Number of Pigs:</label>
        <input type="number" name="pigs" id="pigs" value="<?php echo isset($pigs)?$pigs:''; ?>" />
<?php echo isset($err['pigs'])?$err['pigs']:'' ?> <br><br>

        <input type="submit" value="Calculate Legs">
        <?php

        echo "<h3>Result:</h3>";
        echo "<p><strong>Total Legs: $total_legs</strong></p>";
        ?>

    </form>

  
</body>
</html>