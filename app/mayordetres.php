<?php 
	
	// 4- pedir tres números informar el mayor de los tres  

	$numero1 = rand(1,50);
	$numero2 = rand(1,50);
	$numero3 = rand(1,50);

	echo "Numero1: " . $numero1 . "<br>";
	echo "Numero2: " . $numero2 . "<br>";
	echo "Numero3: " . $numero3 . "<br><br><br>";


	if($numero1 > $numero2) {
		if($numero1 > $numero3) {
			echo "El mayor es: " . $numero1;

		} else{
			echo "El mayor es: " . $numero3;

		}
	} else if($numero2 > $numero3) {
		echo "El mayor es: " . $numero2;

	} else{
		echo "El mayor es: " . $numero3;

	}

?>