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
                        echo "<p>" . $vehiculo->toString() . "<br></p>";
                    }
            " </body>
    </html>";