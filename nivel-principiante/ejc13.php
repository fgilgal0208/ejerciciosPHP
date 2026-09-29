<?php
echo "13. Crea un script PHP que asigna a una variable un NIF sin la letra. Después calcula y muestra la letra correspondiente a él.<br>";

$nif = 55094319;
$letras = "TRWAGMYFPDXBNJZSQVHLCKE";
$letra = $letras[$nif % 23];

echo "<br>El NIF completo es:" .  $nif . $letra;
?>
