<?php
$r = (rand(1, 20));
const pi = 3.14;
$A = pi*$r*$r;
$wh = $r*2;
echo ((" Радиус круга:" . $r). " Площадь круга:" . $A );
echo "(<div style= \"color:red; width: {$wh}px; height: {$wh}px; border: solid 1px; border-radius: 50%;\"> </div>)";
