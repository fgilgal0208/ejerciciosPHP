<?php
echo "32. Crear un script PHP que muestre la tabla de multiplicación de un número entero positivo entre 1 y 10 obtenido aleatoriamente.<br>";

$num = random_int(1, 10);
for ($i=0; $i <= 10 ; $i++) { 
    echo "$num X $i = ". $num * $i . "<br>"; 
}
?>
