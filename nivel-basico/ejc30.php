<?php
echo "30. Crear un script PHP que obtenga el producto de dos números enteros positivos mediante sumas sucesivas.<br>";

$a = random_int(1, 10);
$b = random_int(1, 10);
$resultado = 0;

for ($i = 1; $i <= $b; $i++) {
    $resultado += $a;
}

echo "<br>Primer número: " . $a;
echo "<br>Segundo número: " . $b;
echo "<br>suma: " . $resultado;
?>
