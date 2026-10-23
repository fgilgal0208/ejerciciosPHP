<?php
echo "47. Crear un script PHP que genera aleatoriamente 3 números entre 1 y 20, 5 veces. Cada vez los números deben mostrarse en orden ascendente.<br>";

for ($intento = 1; $intento <= 5; $intento++) {
    $numeros = [
        random_int(1, 20),
        random_int(1, 20),
        random_int(1, 20),
    ];
    sort($numeros, SORT_NUMERIC);

    echo "Intento $intento: " . implode(", ", $numeros) . "<br>";
}
?>
