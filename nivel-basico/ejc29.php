<?php
echo "29. Para pagar impuestos es necesario que las personas sean mayores de 16 años y tengan un sueldo superior a 1000€ al mes. Crear un script PHP que asigne a una variable un nombre y asigna aleatoriamente una edad y un sueldo anual. A continuación muestra si se deben pagar impuestos.<br>";

$edad = random_int(1, 35);
$sueldoAnual = random_int(1, 35000);
$sueldoMensual = $sueldoAnual / 12;

echo "<br>Edad: " . $edad;
echo "<br>Sueldo anual: " . $sueldoAnual . "€";
echo "<br>Sueldo mensual: " . number_format($sueldoMensual, 2) . "€";

if ($edad > 16 && $sueldoMensual > 1000) {
    echo "<br>A PAGAR A PAGAR.";
} else {
    echo "<br>No debe pagar impuestos.";
}
?>
