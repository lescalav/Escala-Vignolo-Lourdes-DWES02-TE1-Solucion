<?php

class Coche extends Vehiculo {
    private int $puertas;

    public function __construct(int $id, string $marca, string $modelo, int $anio, string $tipo, int $puertas) {
        parent::__construct($id, $marca, $modelo, $anio, $tipo);
        $this->puertas = $puertas;
    }

    public function getPuertas(): int {
        return $this->puertas;
    }
}