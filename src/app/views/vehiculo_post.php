<?php

echo "<!DOCTYPE html>
        <html lang='es'>
            <head> 
                <meta charset='utf-8' />
                <title>Gestión de Vehículos</title>
                <meta name='viewport' content='width=device-width, initial-scale=1' />
            </head>
        
            <body>
                <h1>Gestión de Vehículos</h1>";
                    // Recorre el array de vehículos y muestra sus detalles
                    foreach ($mostrartodos as $vehiculo) {
                        echo "<p><strong> ID: " . $vehiculo->getId() . "</strong><br>
                        Marca: " . $vehiculo->getMarca() . "<br>
                        Modelo: " . $vehiculo->getModelo() . "<br>
                        Año: " . $vehiculo->getAnio() . "<br>
                        Tipo: " . $vehiculo->getTipo() . "<br>";
                        if ($vehiculo instanceof Coche) {
                            echo "Puertas: " . $vehiculo->getPuertas() . "<br>";
                        } elseif ($vehiculo instanceof Moto) {
                            echo "Sidecar: " . ($vehiculo->getSidecar() ? 'Sí' : 'No') . "<br></p>";
                        }
                    }
        " </body>
    </html>";