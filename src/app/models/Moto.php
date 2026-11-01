<?php

class Moto extends Vehiculo {
    protected bool $sidecar;

    public function __construct(int $id, string $marca, string $modelo, int $anio, string $tipo, bool $sidecar) {
        parent::__construct($id, $marca, $modelo, $anio, $tipo);
        $this->sidecar = $sidecar;
    }

    public function getSidecar(): bool {
        return $this->sidecar;
    }

    public function jsonSerialize(): array {
        $data = parent::jsonSerialize();
        $data['sidecar'] = $this->sidecar;
        return $data;
    }
}