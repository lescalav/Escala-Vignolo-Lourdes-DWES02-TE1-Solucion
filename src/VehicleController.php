<?php

require_once 'Vehiculo.php';
$VEHICULOS = require_once 'vehiculos_bbdd.php';

class VehicleController {
    
    public function store(string $vehiculoData): ?Vehiculo {
        $todosVehiculos = $this->leerVehiculos();
        $vehiculoData = json_decode($vehiculoData, true);
        $nuevoVehiculo = $this->definirTipo($vehiculoData);
        $todosVehiculos[] = $nuevoVehiculo;
        return $nuevoVehiculo;       
    }

    public function getById(int $id): ?Vehiculo {
        $todosVehiculos = $this->leerVehiculos();
        foreach ($todosVehiculos as $vehiculo) {
            if ($vehiculo->getId() === $id) {
                return $vehiculo;
            }
        }
        return null;
    }
    
    private function leerVehiculos() {
        $arrayVehiculos = [];
        foreach ($VEHICULOS as $vehiculo) {
            $vehiculoObj = $this->definirTipo($vehiculo);
            if ($vehiculoObj !== null) {
                $arrayVehiculos[] = $vehiculoObj; 
            }
        }
        return $arrayVehiculos;
    }

    private function definirTipo(array $vehiculo): ?Vehiculo {
        if ($vehiculo['tipo'] === 'coche') {
            return new Coche(
                $vehiculo['id'],
                $vehiculo['marca'],
                $vehiculo['modelo'],
                $vehiculo['anio'],
                $vehiculo['tipo'],
                $vehiculo['puertas']
            );
        } elseif ($vehiculo['tipo'] === 'moto') {
            return new Moto(
                $vehiculo['id'],
                $vehiculo['marca'],
                $vehiculo['modelo'],
                $vehiculo['anio'],
                $vehiculo['tipo'],
                $vehiculo['sidecar']
            );
        }
        return null;

    }

}



