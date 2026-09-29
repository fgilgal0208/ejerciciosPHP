<?php
echo "22. Crea un script PHP asigna a variables el número de personas adultas y niños que compran un billete para un viaje en globo. Cada adulto pesa 75Kg y cada niño 20Kg. Si la cesta del globo solo soporta 1000 libras, muestra en pantalla si pueden subir juntas al globo o deben dividirse en dos viajes. Una libra son 453,5923699993531 gramos.<br>";

$nAdultos = random_int(1, 10);
$nNinyos = random_int(1, 10);

$gramosPorLibra = 453.5923699993531;
$kgPorLibra = $gramosPorLibra / 1000;
$limitePesoKg = 1000 * $kgPorLibra;

$pesoAdultoKg = 75;
$pesoNinyoKg = 20;
$pesoTotalKg = ($nAdultos * $pesoAdultoKg) + ($nNinyos * $pesoNinyoKg);

echo "Adultos: $nAdultos, Niños: $nNinyos. Peso total: " . number_format($pesoTotalKg, 2) . " kg.<br>";

echo "El globo soporta " . number_format($limitePesoKg, 2) . " kg.<br>";

if ($pesoTotalKg > $limitePesoKg) {
    echo "Hay que dividir el viaje en dos globos.";
} else {
    echo "Se puede dar el viaje en un globo.";
}
?>
