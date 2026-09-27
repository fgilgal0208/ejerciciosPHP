<?php
    echo "<P>1.Crea un script PHP que visualiza las siguientes magnitudes (utiliza un número en
            notación científica y elige una precisión diferente para cada dato):
    • La distancia de la tierra al sol.<br>
    • La distancia de Plutón al Sol .<br>
    • El diámetro del Sol.<br>
    </P>";


    $distanciaTierraSol = 1.496e8;
    $distanciaPlutonSol = 5.9064e9;
    $diametroSol = 1.3927e6;

    echo "La distancia de la Tierra al Sol es: " . number_format($distanciaTierraSol , 0 , "," , ".") . " km<br>";
    echo "La distancia de Plutón al Sol es: " . $distanciaPlutonSol . " km<br>";
    echo "El diámetro del Sol es: " . $diametroSol . " km<br>";
?>