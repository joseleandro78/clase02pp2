<?php 
	
	/* 3- al ingresar un mes del año informar si es invierno, verano, otoño o primavera. 
	(Diciembre Enero Febrero Marzo) VERANO
	(Abril Mayo Junio) OTOÑO
	(Julio Agosto) INVIERNO
	(Septiembre Octubre Noviembre) PRIMAVERA */

	$mes = rand(1,12);

	echo "Número del mes: " . $mes . "<br><br>";

	switch ($mes) {
		case 12:
		case 1:
		case 2:
		case 3:
			echo "Verano";
		break;
		case 4:
		case 5:
		case 6:
			echo "Otoño";
		break;
		case 7:
		case 8:
			echo "Invierno";
		break;
		default:
			echo "Primavera";
		break;
	}
?>