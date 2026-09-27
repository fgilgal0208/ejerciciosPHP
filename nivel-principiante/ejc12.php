<?php
echo "Crea un script PHP que calcule y muestre cuántos bytes hay en un SSD de 64GB<br>";
$gb = 1e9;

$resultado = 64 * $gb;
echo number_format($resultado) . " GB";

?>

