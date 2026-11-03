<?php

namespace app\models;
class Moto extends Vehiculo {
    protected bool $sidecar;

    public function __construct(int $id, string $marca, string $modelo, int $anio, string $tipo, bool $sidecar) {
        parent::__construct($id, $marca, $modelo, $anio, $tipo);
        $this->sidecar = $sidecar;
    }

    public function getSidecar(): bool {
        return $this->sidecar;
    }

    public function toString(): string
    {
        $cuentaconsidecar = '';
        if ($this->sidecar === true) {
            $cuentaconsidecar = 'sí';
        } else {
            $cuentaconsidecar = 'no';
        }
        return parent::toString() . "<br>Sidecar: " . $cuentaconsidecar;
    }
}
