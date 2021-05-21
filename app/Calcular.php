<?php 
// Crear dos funciones:  1) sumar y 2) dividir 

//Crear otra funcion: 3) Retornar si es CERO (retorna TRUE=0 o FALSE=!0)

//Crear funcion: 4) Calcular 

//Parametros: SUMA recibe numero1 y numero2

//Division: recibe numero1 y numero2

//Retornar: si es CERO recibe "numero ingresado"

//Calcular: recibe numero1, operador y numero2. Si el operando es igual a + llamo al sumar
//si es dividir llamo al dividir. Dividir dos caminos...

//5) Funcion mostrar resultado: recibe como parametro resultado ingresado/parametro 
//reglas: sumar suma siempre, sin importar el dato, el resultado lo devuleve SUMAR 
//DIVIDIR: recibe dos y retorna algo, pero no va a dividir cuando el retorna TRUE, si 
//retorna FALSE, puedo dividir y retorno el resultado




function sumar($numero1,$numero2)
{
	$suma= $numero1+$numero2; 
	return $resultado;
}


function dividir($numero1, $numero2)
{
	if (esCero($numero2) == true)
	{
		$resultado = "infinito"; 
	} 
	else
	{
		$resultado = $numero1 /$numero2; 
	}
	return $resultado; 	

}


function calcular($numero1, $operador, $numero2)
{
	switch ($operador) {
		case '+':
			$resultado = sumar($numero1, $numero2);
			break;

		case '/':

			$resultado = dividir($numero1,$numero2); 			
			 break; 
		default:
			$resultado = "operacion invalida...";
	}
	mostraResultado($resultado);
}	


function esCero($numero2)
{
	if ($numero2==0)
	{	
		return true; 
	}
	else
	{
		return false; 
	}
}

function mostraResultado ($resultado)
{
	if ($resultado== "operacion invalida...")
	{
		echo "Error!, operacion no valida"; 
	}
	else
	{

		echo "el resultado es: $resultado"; 
	}
}

?>

