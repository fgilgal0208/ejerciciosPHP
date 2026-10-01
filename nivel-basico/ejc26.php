<?php
echo "26. Crea un script PHP que asigna a tres variables números enteros aleatorios y los muestra en orden ascendente. Además mostrará también si la generación aleatoria fue en orden.<br>";

$n1 = random_int(0, 100);
$n2 = random_int(0, 100);
$n3 = random_int(0, 100);

$numeros = [$n1, $n2, $n3];
sort($numeros);


echo "Números generados: $n1, $n2, $n3<br>";
echo "Orden ascendente: " . implode(" - ", $numeros) . "<br>";

?>
