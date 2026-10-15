<?php
echo "37. Crear un script PHP que genera aleatoriamente un color RGB en hexadecimal y muestra el resultado con ese color de fondo y el texto “Este es el color generado aleatoriamente”.<br>";

$rojo = random_int(0, 255);
$verde = random_int(0, 255);
$azul = random_int(0, 255);
$color = sprintf("#%02X%02X%02X", $rojo, $verde, $azul);
$luminosidad = (0.299 * $rojo) + (0.587 * $verde) + (0.114 * $azul);
$colorTexto = $luminosidad >= 128 ? "#000000" : "#FFFFFF";

echo "Color generado: $color<br>";
echo "<div style=\"background-color: $color; color: $colorTexto; padding: 20px;\">";
echo "Este es el color generado aleatoriamente";
echo "</div>";
?>
