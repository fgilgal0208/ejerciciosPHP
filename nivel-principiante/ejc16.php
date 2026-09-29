<?php
echo "16. Crea un script PHP que asigna a variables dos números enteros y muestre en pantalla <n> dividido por <m> dé como resultado un cociente de <c> y el resto es <r>, donde <n> y <m> son los números introducidos, <c> es el cociente y <r> es el resto respectivamente.<br>";

$n = 25;
$m = 4;
$cociente = $n / $m;
$resto = $n % $m;

echo "<br> $n dividido por $m da como resultado un cociente de " . number_format($cociente , 0 , "." , ".") . " y el resto es " . $resto;
?>
