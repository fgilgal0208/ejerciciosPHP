<?php
echo "36. Crear un script PHP que genera aleatoriamente 15 veces un número y muestre un mensaje si el número es divisible por 2, por 3 o por ninguno de ellos.<br>";

for ($i = 1; $i <= 15; $i++) {
    $numero = random_int(1, 100);
    $divisiblePor2 = $numero % 2 === 0;
    $divisiblePor3 = $numero % 3 === 0;

    echo "$i. $numero: ";

    if ($divisiblePor2 && $divisiblePor3) {
        echo "divisible por 2 y por 3.";
    } elseif ($divisiblePor2) {
        echo "divisible por 2.";
    } elseif ($divisiblePor3) {
        echo "divisible por 3.";
    } else {
        echo "no es divisible por 2 ni por 3.";
    }

    echo "<br>";
}
?>
