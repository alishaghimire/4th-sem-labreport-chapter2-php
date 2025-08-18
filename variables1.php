<?php
//interger
print "<br> <br> Integer:";
$x=5;
print "<br>"; 
var_dump($x);
echo "<br /> $x";
 print "<br> The integer number".$x;

//string 
print "<br> <br> String:";
$name="Alisha Khatri";
echo "<br /> $name";
print"<br/> hi i am" .$name;
print "<br>"; 
var_dump($name);

//float
print "<br> <br> Float:";
 $y=10.0098;
 echo "<br> $y";
 print "<br> The float number".$y;
 print "<br>"; 
 var_dump($y);

 //boolean
print "<br> <br> Boolean:";
 $a=true;
 echo "<br> $a";
 print "<br> the boolean is:".$a;
 print "<br>"; 
 var_dump($a);

 // Arrays
 print "<br> <br> Array:";
$Brand = array("cline", "Adidas", "CV");

print "<br> ";             
print_r($Brand);

echo "<br>";
var_dump($Brand);
//null
print "<br> <br> Null:";
$z = "Hello world!";
$z = null;
echo "<br>";
var_dump($z);
echo "<br //>";
echo "<br //>";
echo "checking the data type";
echo "<br />";
 // check the variable 
 echo "x is integer? " . (is_int($x) ? 'Yes' : 'No') . "<br>";
 echo "name is string? " . (is_string($name) ? 'Yes' : 'No') . "<br>";
 echo "y is float? " . (is_float($y) ? 'Yes' : 'No') . "<br>";
 echo "a is Boolean? " . (is_bool($a) ? 'Yes' : 'No') . "<br>";
 echo "Brand is array? " . (is_array($Brand) ? 'Yes' : 'No') . "<br>";
 echo "z is null? " . (is_null($z) ? 'Yes' : 'No') . "<br>";

?>