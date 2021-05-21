
<?php

//Ejercicio-10: de un numero ingresado, mostrar todos los numeros primos hasta el 0 (cero) 

$numIngresado = 30;

$contador = $numIngresado;

echo "<b>Mostrar Numeros Primos hasta el 0 (CERO)</b><br>"; 

for ($i = 2;$i <= $contador;$i++)
{
    for ($numAnterior = 2;$numAnterior < $numIngresado;$numAnterior++)
    {
        if ($numIngresado % $numAnterior == 0)
        {
        	// echo "nro anterior: $numeroAnterior<br>";
            // si entra aca no es primo
            break;
        }
    }
    

    if ($numAnterior < $numIngresado)
    {
        // echo "<br>$numeroIngresado NO es primo<br>";
        
        $numIngresado-=1;

    }
    else
    {
        

        echo "<br>$numIngresado<br>";

        $numIngresado-=1;

    }

    
    
}




?>