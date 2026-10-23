<?php
echo "44. Crear un script PHP que ingrese por teclado dos números y descubra si son amigos. Dos números son amigos cuando cada uno es igual a la suma de los divisores propios del otro.<br>";

function sumarDivisoresPropios(int $numero): int
{
    $suma = 0;

    for ($divisor = 1; $divisor <= intdiv($numero, 2); $divisor++) {
        if ($numero % $divisor === 0) {
            $suma += $divisor;
        }
    }

    return $suma;
}

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
    $numero1 = filter_input(INPUT_POST, 'numero1', FILTER_VALIDATE_INT);
    $numero2 = filter_input(INPUT_POST, 'numero2', FILTER_VALIDATE_INT);

    if ($numero1 === false || $numero1 === null || $numero2 === false || $numero2 === null || $numero1 <= 0 || $numero2 <= 0) {
        echo "Introduce dos números enteros positivos.<br>";
    } else {
        $suma1 = sumarDivisoresPropios($numero1);
        $suma2 = sumarDivisoresPropios($numero2);

        echo "Suma de los divisores propios de $numero1: $suma1<br>";
        echo "Suma de los divisores propios de $numero2: $suma2<br>";

        if ($suma1 === $numero2 && $suma2 === $numero1) {
            echo "$numero1 y $numero2 son números amigos.";
        } else {
            echo "$numero1 y $numero2 no son números amigos.";
        }
    }
}
?>

<form method="post">
    <label for="numero1">Primer número positivo:</label>
    <input type="number" id="numero1" name="numero1" min="1" step="1" required>
    <label for="numero2">Segundo número positivo:</label>
    <input type="number" id="numero2" name="numero2" min="1" step="1" required>
    <button type="submit">Comprobar</button>
</form>
