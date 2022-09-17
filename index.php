<?php
$r = (rand(1, 20));
const pi = 3.14;
$A = pi*$r*$r;
echo ((" Радиус круга:" . $r). " Площадь круга:" . $A );
echo "(<div style= \"color:red; width: $r*2px; height: $r*2px; border: solid 1px; border-box: 50%;\"> </div>)";
