<?php 
	
	// 4- pedir tres números informar el mayor de los tres  

	$numero1 = rand(1,50);
	$numero2 = rand(1,50);
	$numero3 = rand(1,50);

	echo "Numero1: " . $numero1 . "<br>";
	echo "Numero2: " . $numero2 . "<br>";
	echo "Numero3: " . $numero3 . "<br><br><br>";

	if ($numero1 > $numero2 && $numero1 > $numero3)
	{
		$numMayor= $numero1;

	}
	else
	{
		if ($numero2> $numero3)
		{
			$numMayor= $numero2;

		}
		else
		{
			$numMayor= $numero3;
		}

	}
	echo "El Numero es: ". $numMayor;


	

?>