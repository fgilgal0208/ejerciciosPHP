<?php
echo "20. Crea un script PHP que genera aleatoriamente un número entero y muestre si es par o impar.<br>";

$numero = random_int(1, 1000);

if ($numero % 2 == 0) {
    echo "$numero es par";
} else {
    echo "$numero es impar";
}
?>
