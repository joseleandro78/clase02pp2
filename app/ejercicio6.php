<?php 
	
	// 6- (SWITCH) En una empresa de viajes me dan la opcion de viajar a Bariloche, 
	//    Ushuaia o Cataratas, informar si hace frio o calor en la opcion seleccionada. 
	
	$destino = rand(1,3); "<br>";

	echo "Destino: ". $destino."<br><br>";

	switch ($destino) {
		case 1:
			echo "Usuahia: hace frio...";
		break;
		case 2: 
			echo "Bariloche: hace frio...";
		break;
		default:
			echo "Cataratas: hace calor...";
		break;
	}

	

?>