<?php

function traingle_area($base, $height)
{
     return 0.5* $base *$height;

}
$base=3;
$height=9;
echo "the area of traingle $base+$height is:" .traingle_area($base,$height);
?>