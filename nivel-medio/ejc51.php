<?php
echo "51. Crear un script PHP que genera aleatoriamente un año de nacimiento desde 1900 hasta 2000. Después debe mostrar cada año desde el año de nacimiento hasta el año actual.<br>";

$anioNacimiento = random_int(1900, 2000);
$anioActual = (int) date('Y');
$anios = [];

for ($anio = $anioNacimiento; $anio <= $anioActual; $anio++) {
    $anios[] = $anio;
}

echo "Año de nacimiento: $anioNacimiento<br>";
echo implode(", ", $anios);
?>
