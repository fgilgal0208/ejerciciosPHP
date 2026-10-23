<?php
echo "48. Repetir el ejercicio anterior, generando además un número que indique el orden para mostrar los números (ascendente o descendente).<br>";

for ($intento = 1; $intento <= 5; $intento++) {
    $numeros = [
        random_int(1, 20),
        random_int(1, 20),
        random_int(1, 20),
    ];
    $tipoOrden = random_int(0, 1);
    sort($numeros, SORT_NUMERIC);

    if ($tipoOrden === 1) {
        $numeros = array_reverse($numeros);
        $orden = "descendente";
    } else {
        $orden = "ascendente";
    }

    echo "Intento $intento (indicador $tipoOrden: $orden): " . implode(", ", $numeros) . "<br>";
}
?>
