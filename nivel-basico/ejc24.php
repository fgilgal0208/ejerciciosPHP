<?php
echo "24. Crear un script PHP asigna a variables un nombre del usuario y un número entero. Luego muestre el nombre del usuario en tantas líneas como indique el número.<br>";

$numero = random_int(0,10);
$nombre = "FranG";

for ($i=0; $i < $numero ; $i++) { 
    echo "<br>" . $nombre . "<br>";
}
?>
