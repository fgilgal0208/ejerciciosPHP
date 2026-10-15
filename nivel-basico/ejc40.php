<?php
echo "40. Crear un script PHP que genera números aleatorios entre 1 y 100 hasta obtener uno que tenga raíz cuadrada entera. Mostrar todos los números con sus raíces cuadradas.<br>";

do {
    $numero = random_int(1, 100);
    $raiz = sqrt($numero);
    $raizEntera = (int) $raiz;

    echo "Número: $numero, raíz cuadrada: " . number_format($raiz, 2, ',', '.') . "<br>";
} while ($raizEntera * $raizEntera !== $numero);

echo "$numero tiene raíz cuadrada entera: $raizEntera.";
?>
