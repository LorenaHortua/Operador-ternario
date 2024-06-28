<?php

$cantidadcamisas = readline("Ingrese cuántas camisas desea comprar: ");
$precioporcamisa = 60000;

$preciototal = $cantidadcamisas * $precioporcamisa;

$descuento = ($cantidadcamisas >= 3) ? 0.20 : 0.10;
$descuentototal = $preciototal - ($preciototal * $descuento);

echo "Detalles de la compra:\n";
echo "Cantidad de camisas: $cantidadcamisas\n";
echo "Precio unitario de cada camisa: $precioporcamisa\n";
echo "Total sin descuento: $preciototal\n";
echo ($descuento == 0.20) 
? "Se aplicó un descuento del 20%.\n" 
: "Se aplicó un descuento del 10%.\n";
echo "Total a pagar con descuento: $descuentototal\n";

?>