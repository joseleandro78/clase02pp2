<?php

function de_Celsius_a_Fahrenheit($tempCelsius)
{
	$tempFahrenheit = ($tempCelsius * 1.8) + 32;

	return $tempFahrenheit;
}


function de_Fahrenheit_a_Celsius($tempFahrenheit)
{
	$tempCelsius = ($tempFahrenheit - 32) / 1.8;

	return $tempCelsius;
}

function mostrarTemperatura($temperatura)
{
	if ($temperatura == "Tipo Invalido")
    {
        echo "Error, Tipo no valido";
    }
    else
    {
        echo "La conversión es: °$temperatura";
    }
}

function transformar($temperatura, $tipo)
{
	switch ($tipo)
    {
        case 'c':
            $nuevaTemperatura = de_Fahrenheit_a_Celsius($temperatura);
        break;
        case 'f':
            $nuevaTemperatura = de_Celsius_a_Fahrenheit($temperatura);
        break;
        default:
            $nuevaTemperatura = "Tipo Invalido";
        break;
    }

    mostrarTemperatura($nuevaTemperatura);
}


?>