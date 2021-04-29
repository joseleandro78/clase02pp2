	<?php 
	
	// 7- (IF) De tres numeros ingresados indicar el numero del medio o informar si NO hay numero 
	//    del medio. 
	
	$numero1 = rand(1,10); 
	$numero2 = rand(1,10); 
	$numero3 = rand(1,10); 
	$medio= "";

	echo "numero1: ". $numero1."<br><br>";
	echo "numero2: ". $numero2."<br><br>";
	echo "numero3: ". $numero3."<br><br>";


	if (($numero1!= $numero2) && ($numero1!= $numero3) &&($numero2!=$numero3))
	{

		if (($numero1> $numero2 && $numero1< $numero3) || ($numero1< $numero2 && $numero1> $numero3)) 

			{

				$medio= $numero1; 

					echo "El numero medio es: ". $medio;

			}
			else
			{
				if (($numero2> $numero1 && $numero2< $numero3) || ($numero2< $numero1 && $numero2> $numero3))

					{
						$medio= $numero2;

							echo "El numero medio es: ". $medio;
					}		
								
					else
					{	
								$medio= $numero3; 

									echo "El numero medio es: ".$medio;

					}
			}

	}
	else 
	{
		echo "No hay Numero MEDIO";
	}			


	
	?>