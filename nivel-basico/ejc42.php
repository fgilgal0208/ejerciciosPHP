<?php
echo "42. Crear un script PHP que genere aleatoriamente 10 números enteros entre -50 y 150. Para cada uno, muestra Hielo si es igual o menor a 0, Agua si es mayor que 0 y menor que 100, y Vapor si es mayor que 100.<br>";

for ($i = 1; $i <= 10; $i++) {
    $numero = random_int(-50, 150);

    if ($numero <= 0) {
        $estado = "Hielo";
    } elseif ($numero <= 100) {
        $estado = "Agua";
    } else {
        $estado = "Vapor";
    }

    echo "$numero: $estado<br>";
}
?>
