<?php
echo "27. Crear un script PHP que asigna a una variable una nota entre 0 y 10. Luego, transforma la nota en una calificación y muestra el resultado.<br>";

$nota  = random_int(0, 10);

$resultado = match ($nota) {
0,1,2,3,4 => "Suspenso", 
5,6  => "Suficiente",
7,8  => "Notable",
9,10 => "Notable",
};

echo "<br>Teniendo un " . $nota . " has obtenido un " . $resultado
?>
