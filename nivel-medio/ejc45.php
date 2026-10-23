<?php
echo "45. Crear un script PHP que asigna a una variable el nombre de un usuario y luego lo muestre tres veces: en mayúsculas, en minúsculas y con la inicial del nombre y los apellidos en mayúsculas.<br>";

$usuario = "María José García López";

echo "Nombre completo en mayúsculas: " . mb_strtoupper($usuario, 'UTF-8') . "<br>";
echo "Nombre completo en minúsculas: " . mb_strtolower($usuario, 'UTF-8') . "<br>";
echo "Inicial y apellidos en mayúsculas: " . mb_strtoupper(preg_replace('/^\s*(\p{L})\p{L}*/u', '$1', $usuario), 'UTF-8');
?>
