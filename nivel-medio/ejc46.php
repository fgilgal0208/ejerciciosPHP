<?php
echo "46. Crear un script PHP que resuelva una ecuación de segundo grado. Se asignan los coeficientes A, B y C y se calculan las posibles soluciones.<br>";

$a = 1;
$b = -5;
$c = 6;
$discriminante = ($b * $b) - (4 * $a * $c);

echo "Ecuación: {$a}x² + ({$b})x + ({$c}) = 0<br>";

if ($a === 0) {
    if ($b === 0) {
        echo $c === 0 ? "La ecuación tiene infinitas soluciones." : "La ecuación no tiene solución.";
    } else {
        $x = -$c / $b;
        echo "Es una ecuación de primer grado. Solución: x = $x";
    }
} elseif ($discriminante > 0) {
    $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
    echo "Dos soluciones reales: x₁ = $x1, x₂ = $x2";
} elseif ($discriminante === 0) {
    $x = -$b / (2 * $a);
    echo "Una solución real doble: x = $x";
} else {
    $parteReal = -$b / (2 * $a);
    $parteImaginaria = sqrt(-$discriminante) / abs(2 * $a);
    echo "Dos soluciones complejas: x₁ = $parteReal + {$parteImaginaria}i, x₂ = $parteReal - {$parteImaginaria}i";
}
?>
