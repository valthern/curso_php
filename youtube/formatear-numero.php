<?php
define ("BR","<br>");
$cantidad_1 = 12732809.7765;


$texto1=number_format($cantidad_1);
$texto2 = number_format($cantidad_1, 2);
$texto3=number_format($cantidad_1,2,".","'");
echo $texto1.BR;
echo $texto2.BR;
echo $texto3.BR;
