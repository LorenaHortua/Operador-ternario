<?php

echo "Ingrese su edad: ";
$edad = readline();

if ($edad >= 18) {
    
    echo "¿Tienes licencia de conducir? (sí/no): ";
    $tieneLicencia = readline();
    
    if ($tieneLicencia == 'sí' || $tieneLicencia == 'si' || $tieneLicencia == 'Sí' || $tieneLicencia == 'Si' || $tieneLicencia == 'SÍ' || $tieneLicencia == 'SI') {
        echo "Puedes conducir.\n";
    } else {
        echo "Debes obtener una licencia de conducir primero.\n";
    }
} else {
    
    echo "No puedes conducir.\n";
}
?>