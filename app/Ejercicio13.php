<?php

include_once "calcular.php";
$numero1= rand (0,20); 
echo "$numero1 <br>";
$numero2= rand (0,20);
echo "$numero2 <br>"; 
$operacion= "/";

calcular ($numero1, $operacion, $numero2); 


?>