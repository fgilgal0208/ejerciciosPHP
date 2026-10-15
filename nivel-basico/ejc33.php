<?php
echo "33. Crear un script PHP que muestre la lista de intereses y el capital acumulado producido cada año por un capital inicial C, con un interés anual R durante N años. El interés obtenido anualmente se calcula con la fórmula I = C * R / 100.<br>";

$capital = 1000000;
$interesAnual = 4;
$anios = 20;

echo "Capital inicial: " . number_format($capital, 2, ',', '.') . "€<br>";
echo "Interés anual: $interesAnual%<br>";
echo "Años: $anios<br><br>";

for ($anio = 1; $anio <= $anios; $anio++) {
    $interes = $capital * $interesAnual / 100;
    $capital += $interes;

    echo "Año $anio: interés " . number_format($interes, 2, ',', '.') . "€, capital acumulado " . number_format($capital, 2, ',', '.') . "€<br>";
}
?>
