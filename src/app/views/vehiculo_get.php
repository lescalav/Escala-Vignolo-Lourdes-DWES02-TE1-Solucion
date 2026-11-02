<?php

$extra = '';
if ($mostrarvehiculo instanceof Coche) {
    $extra = 'Puertas: ' . $mostrarvehiculo->getPuertas();
} elseif ($mostrarvehiculo instanceof Moto) {
    $extra = 'Sidecar: ' . ($mostrarvehiculo->getSidecar() ? 'Sí' : 'No');
}

echo "<!DOCTYPE html>
        <html lang='es'>
        <body>
                <h2>ID: " . $mostrarvehiculo->getId() . "</h2>
                <p>Marca: " . $mostrarvehiculo->getMarca() . "<br>
                Modelo: " . $mostrarvehiculo->getModelo() . "<br>
                Año: " . $mostrarvehiculo->getAnio() . "<br>
                Tipo: " . $mostrarvehiculo->getTipo() . "<br>
                " . $extra . " </p>
        </body>
    </html>";