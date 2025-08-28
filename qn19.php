<?php
$err = [];
$text = "";
$result = "";

// Validation
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['text']) && trim($_POST['text']) !== "") {
        $text = trim($_POST['text']);
    } else {
        $err['text'] = 'Text input is required.';
    }

    // If no validation errors, compute result
    if (empty($err)) {
        function addIf($str) {
            // Check if string already starts with 'if'
            if (substr($str, 0, 2) === "if") {
                return $str;
            }
            return "if " . $str;
        }

        $result = "Result: " . addIf($text);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>If String Modifier</title>
</head>
<body>

<h2>If String Modifier</h2>

<form method="post">
    <label for="text">Enter a String:</label>
    <input type="text" name="text" id="text" 
           value="<?php echo isset($text) ? htmlspecialchars($text) : ''; ?>" />
    <?php echo isset($err['text']) ? "<span style='color:red;'>{$err['text']}</span>" : ''; ?>
    <br><br>

    <input type="submit" value="Modify String">

    <?php
    if (!empty($result)) {
        echo "<h3>$result</h3>";
    }
    ?>
</form>

</body>
</html>
