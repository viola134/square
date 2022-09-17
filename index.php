<?php
$r = (rand(1, 20));
const pi = 3.14;
$A = pi*$r*$r;
$wh = $r*2;
echo ((" Радиус круга:" . $r). " Площадь круга:" . $A );
echo "(<div style= \"color:red; width: $whpx; height: $whpx; border: solid 1px; border-box: 50%;\"> </div>)";
