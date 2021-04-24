<?php 
	
	// 5- Ejercicio con Switch  

	$edad = rand(1,50);


	echo "La edad es: " . $edad. "<br>";
	

	switch ($edad) {

		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
		case 6:
		case 7:
		case 8:
		case 9:
		case 10:
			echo "Es menor";
		break;

		case 11:
		case 12:
		case 13:
		case 14:
		case 15:
			echo "Es adolescente";
		break; 		

		default:
			echo "Es mayor"; 
		break;
	}

?>