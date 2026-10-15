<?php
echo "34. Crear un script PHP que asigna a variables dos números enteros positivos N y M, y luego calcule y muestre los múltiplos de N menor que M.<br>";

$n = random_int(1, 10);
$m = random_int(20, 100);

echo "N = $n<br>";
echo "M = $m<br>";
echo "Múltiplos de $n menores que $m: ";

for ($multiplo = $n; $multiplo < $m; $multiplo += $n) {
    echo "$multiplo ";
}
?>
