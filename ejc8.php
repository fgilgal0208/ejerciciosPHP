<?php
    echo "Crea un script PHP que declare las variables a, b y c con valores 3.5, 6 y 4.25
    respectivamente. Luego calcule y muestre en pantalla la siguiente operación
    aritmética:";

    $a = 3.5;
    $b = 6;
    $c = 4.25;

    $parte1 = (($a +2)/(2 * $b));
    $parte2 = (($c-4)/($a / $c))**2;
    $resultado = $parte1 * $parte2;

    echo "<br>(($a +2)/(2 * $b)) *  (($c-4)/($a / $c))^2 : " . $resultado;
?>

