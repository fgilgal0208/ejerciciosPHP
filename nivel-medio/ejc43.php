<?php
echo "43. Crear un script PHP que asigna una frase a una cadena de caracteres y la muestra en sentido inverso.<br>";

$frase = "¡Hola, mundo! ¿Qué tal?";
$caracteres = preg_split('//u', $frase, -1, PREG_SPLIT_NO_EMPTY);
$fraseInversa = implode('', array_reverse($caracteres));

echo "Frase original: $frase<br>";
echo "Frase inversa: $fraseInversa";
?>
