<?php
session_start();
const PI = 3.14;
function area($radius){
    return PI*$radius*$radius;
}
?>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $radius = $_POST['radius'];
    $result = area($radius);
    $_SESSION['message'] = "Area of circle with radius = $radius is $result";
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
?>
<html>
    <head>
        <title>Area</title>
</head>
<body>
    <form method="POST">
        <h1>Radius Calculator</h1>
        <input type="number" step="any" name="radius" placeholder="Radius">
        <input type="submit" value="Calculate Area">
    </form>
    <?php
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }?>
</body>
</html>
