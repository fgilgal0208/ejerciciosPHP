<?php
    echo "Crea un script PHP que muestre en pantalla (utiliza un número float en notación
                científica y elige una precisión diferente para ambos datos):<br>
                • La cantidad de bits en una memoria RAM de 16 GB.<br>
                • La población de la Tierra.<br>
                • El tamaño de algún virus (20 nm). <br>";

    $memoriaRAM = 16 * pow(2, 30) * 8; 
    $poblacionTierra = 7.9e9;   
    $tamanoVirus = 20e-9; 

    echo "<br>La cantidad de bits en una memoria RAM de 16 GB es: " . number_format($memoriaRAM, 0, ',', '.') . " bits<br>";
    echo "La población de la Tierra es: " . number_format($poblacionTierra, 0, ',', '.') . " personas<br>";
    echo "El tamaño de algún virus (20 nm) es: " . number_format($tamanoVirus, 9, ',', '.') . " metros<br>";
?>