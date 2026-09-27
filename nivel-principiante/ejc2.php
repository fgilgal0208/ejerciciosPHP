<?php
    echo "2.Crea un script PHP que declara tres variables de tipo entero y les asigna a cada una el número 989 en decimal, octal, hexadecimal y binaria. <br>";
    
    $numDecimal = 989;
    $numEnOctal = decoct($numDecimal);
    $numEnHexadecimal = dechex($numDecimal);
    $numEnBinario = decbin($numDecimal);
    

    echo "<br>El número 989 en decimal es: " . $numDecimal . "<br>";
    echo "El número 989 en octal es: " . $numEnOctal . "<br>";
    echo "El número 989 en hexadecimal es: " . $numEnHexadecimal . "<br>";
    echo "El número 989 en binario es: " . $numEnBinario;


?>