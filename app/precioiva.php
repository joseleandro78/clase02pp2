<?php 
	
	// 2- al ingresar un precio se muestra el precio más IVA 

	$precio = rand(1,3000);
	$precioIVA = $precio + ($precio * .21);

	echo "<strong>Precio:</strong> " . $precio;
	echo "<br><br><strong>Precio + IVA:</strong> " . $precioIVA;

?>