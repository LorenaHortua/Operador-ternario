<?php

$cantidad = readline("Ingrese la cantidad de artículos comprados: ");
$preciounitario = readline("Ingrese el precio unitario de cada artículo: ");

$totalsindescuento = $cantidad * $preciounitario;

$descuento = ($cantidad >= 10) ? 0.10 : 0;
$totalcondescuento = $totalsindescuento * (1 - $descuento);

echo ($descuento > 0) 
? "Se aplicó un descuento del 10%. " 
: "No se aplicó ningún descuento. ";
echo "Total a pagar: $totalcondescuento\n";
 
?>