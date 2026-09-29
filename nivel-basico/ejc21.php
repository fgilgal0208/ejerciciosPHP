<?php
echo "21. Crea un script PHP que asigna una variable la edad de un usuario y muestre en pantalla si es mayor de edad.<br>";

$edad = random_int(1,30);
echo "<br> ";
print($edad);
if ($edad > 19) {
    echo(" es mayor de edad");
}else {
    echo " Es menor de edad";
}
?>
