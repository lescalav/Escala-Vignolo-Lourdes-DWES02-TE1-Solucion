<?php
declare(strict_types=1);

function request(): void
{
    $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

    if ($method === 'GET') {
        $id = $_GET['id'];
        $controlador = new VehicleController();
        $controlador->getById((int)$id);
    }

    if ($method === 'POST') {
        $jsonPost = $_POST['jsonPost'];
        $controlador = new VehicleController();
        $controlador->store($jsonPost);
    }
}

request();
