<?php
    echo "9.Crea un script PHP asigna a dos variables un número de horas extra trabajadas y el
    salario por cada una. Luego, calcula y muestre en pantalla el salario con el símbolo
    monetario: <br>";

    $horasExtras = 10;
    $retribucionHorasExtras = 15;
    $salarioHorasExtras = $horasExtras * $retribucionHorasExtras;

    echo "<br> Con un total de " . $horasExtras . " horas extras , pagandolas a " 
    . $retribucionHorasExtras . "&euro;" . " sale a un total de " .
     $salarioHorasExtras . "&euro;"; 

?>

