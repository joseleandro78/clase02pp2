<?php

include_once('ConversionTemperatura.php');

$temperatura = rand(0,80);

echo "La temperatura ingresada es: $temperatura<br>"; 

transformar($temperatura, 'f');

?>
