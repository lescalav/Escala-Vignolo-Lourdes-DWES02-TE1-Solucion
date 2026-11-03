<?php

namespace app\models;

use Override;

class Coche extends Vehiculo {
    protected int $puertas;

    public function __construct(int $id, string $marca, string $modelo, int $anio, string $tipo, int $puertas) {
        parent::__construct($id, $marca, $modelo, $anio, $tipo);
        $this->puertas = $puertas;
    }

    public function getPuertas(): int {
        return $this->puertas;
    }

    public function toString(): string
    {
        return parent::toString() . "<br>Puertas: " . $this->puertas;
    }
}