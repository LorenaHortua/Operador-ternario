<?php

echo "Ingrese el mes en el que desea sembrar (enero, febrero, etc.): ";
$mes = readline();

$metodoSiembra = ($mes == 'abril' || $mes == 'mayo' || $mes == 'junio' || $mes == 'julio' || $mes == 'agosto' || $mes == 'septiembre' || $mes == 'octubre' || $mes == 'noviembre') 
    ? 'Se debe usar la siembra en almácigo.' 
    : 'Se puede realizar la siembra directa.';

echo "Para el mes de " . $mes . ": " . $metodoSiembra . "\n";
?>