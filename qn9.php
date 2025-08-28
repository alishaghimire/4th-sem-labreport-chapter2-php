<?php
$err = [];
$wins = $draws = $losses = 0;
if (isset($_POST['wins']) && !empty($_POST['wins'])
&& trim($_POST['wins'])) {
$wins = $_POST['wins'];
} else {
    $err['wins'] = 'wins';
}
if (isset($_POST['draws']) && !empty($_POST['draws'])
&& trim($_POST['draws'])) {
$draws = $_POST['draws'];
} else {
    $err['draws'] = 'draws';
}
if (isset($_POST['losses']) && !empty($_POST['losses'])
&& trim($_POST['losses'])) {
$losses = $_POST['losses'];
} else {
    $err['losses'] = 'losses';
}
function calculatePoints($wins, $draws, $losses) {
            return ($wins * 3) + ($draws * 1) + ($losses * 0);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>calculates the number</title>
</head>
<body>
    <h2>calculates the number</h2>
    <form method="post">
        <label for="wins">Wins:</label>
        <input type="number" name="wins" id="wins" value="<?php echo isset($wins)?$wins:''; ?>" />
<?php echo isset($err['wins'])?$err['wins']:'' ?><br><br>

        <label for="draws">Draws:</label>
        <input type="number" name="draws" id="draws" value="<?php echo isset($draws)?$draws:''; ?>" />
<?php echo isset($err['draws'])?$err['draws']:'' ?><br><br>

        <label for="losses">losses:</label>
        <input type="number" name="losses" id="losses" value="<?php echo isset($losses)?$losses:''; ?>" />
<?php echo isset($err['losses'])?$err['losses']:'' ?> <br><br>

        <input type="submit" value="Calculate TotalPoint">
        <?php

         $totalPoints = calculatePoints($wins, $draws, $losses);
         echo "<h3>Total Points: $totalPoints</h3>";
        ?>

    </form>