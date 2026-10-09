<?php
echo "31. Crear un script PHP que obtenga el cociente y el resto de dos números enteros positivos mediante restas sucesivas.<br>";

$dividendo = random_int(1, 50);
$divisor = random_int(1, 20);
$cociente = 0;
$resto = $dividendo;

while ($resto >= $divisor) {
    $resto -= $divisor;
    $cociente++;
}

echo "Dividendo: $dividendo<br>";
echo "Divisor: $divisor<br>";
echo "Cociente: $cociente<br>";
echo "Resto: $resto";
?>
