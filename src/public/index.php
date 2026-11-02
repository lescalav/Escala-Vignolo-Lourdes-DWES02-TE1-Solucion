<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vehiculos_bbdd.php';

use app\controllers\VehicleController;

function request(): void
{

    //header('Content-Type: application/json; charset=utf-8'); // Con esto, el navegador reconoce que es un json y lo muestra formateado
    $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
    $controlador = new VehicleController();

    if ($method === 'GET') {
        $id = $_GET['id'];
        $mostrarvehiculo = $controlador->getById((int)$id);
        if ($mostrarvehiculo === null) {
            echo "Vehículo no encontrado"; // Si el vehículo no se encuentra, se muestra un mensaje de error y se detiene la ejecución
            return;
        }
        require '../app/views/vehiculo_get.php';
        //echo json_encode($mostrarvehiculo);
    }

    if ($method === 'POST') {
        $jsonPost = $_POST['jsonPost'];
        $mostrartodos = $controlador->store($jsonPost);
        require '../app/views/vehiculo_post.php';
        //echo json_encode($mostrartodos);
    }
}

request();
