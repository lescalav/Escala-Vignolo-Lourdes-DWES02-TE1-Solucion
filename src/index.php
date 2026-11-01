<?php
declare(strict_types=1);

require_once 'VehicleController.php';

function request(): void
{
    $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

    if ($method === 'GET') {
        $id = $_GET['id'];
        $controlador = new VehicleController();
        $mostrarvehiculo = $controlador->getById((int)$id);
        echo json_encode($mostrarvehiculo);
    }

    if ($method === 'POST') {
        $jsonPost = $_POST['jsonPost'];
        $controlador = new VehicleController();
        $mostrartodos = $controlador->store($jsonPost);
        echo json_encode($mostrartodos);
    }
}

request();
