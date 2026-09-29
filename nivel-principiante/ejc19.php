<?php
echo "19. Crea un script PHP que asigna a una variable una cantidad de dinero en € y muestre en pantalla su equivalente en $ y £.<br>";

$euros = 100;
$dolares = $euros * 1.08;
$libras = $euros * 0.85;

echo "<br>$euros € equivalen a " . number_format($dolares, 2) . " \$ y " . number_format($libras, 2) . " £.";
?>
