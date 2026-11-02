<?php
$extra = '';
if ($mostrarvehiculo instanceof Coche) {
    $extra = 'Puertas: ' . $mostrarvehiculo->getPuertas();
} elseif ($mostrarvehiculo instanceof Moto) {
    $extra = 'Sidecar: ' . ($mostrarvehiculo->getSidecar() ? 'Sí' : 'No');
}

echo "<html>
    <body>
        <h2>
            ID: " . $mostrarvehiculo->getId() . "<br>
            Marca: " . $mostrarvehiculo->getMarca() . "<br>
            Modelo: " . $mostrarvehiculo->getModelo() . "<br>
            Año: " . $mostrarvehiculo->getAnio() . "<br>
            Tipo: " . $mostrarvehiculo->getTipo() . "<br>
            " . $extra . "
        </h2>
    </body>
</html>";