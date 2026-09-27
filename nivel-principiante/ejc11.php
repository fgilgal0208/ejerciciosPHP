<?php
    echo "11.Crea un script PHP que asigna a una variable tu peso en Kg y luego calcule el peso equivalente en onzas. Una onza son 28,3495 gramos.<br>";

    $pesoKg = 70;
    $gramosPorOnza = 28.3495;
    $pesoOnzas = ($pesoKg * 1000) / $gramosPorOnza;

    echo "Un peso de " . $pesoKg . " kg equivale a " . round($pesoOnzas, 2) . " onzas.";
?>
