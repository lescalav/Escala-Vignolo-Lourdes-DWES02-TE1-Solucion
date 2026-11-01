<?php
declare(strict_types=1);

require_once '../app/controllers/VehicleController.php';

function request(): void
{

    header('Content-Type: application/json; charset=utf-8'); // Con esto, el navegador reconoce que es un json y lo muestra formateado
    $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
    $controlador = new VehicleController();

    if ($method === 'GET') {
        $id = $_GET['id'];
        $mostrarvehiculo = $controlador->getById((int)$id);
        //TODO : Cargar vista vehiculo_get.php
        echo json_encode($mostrarvehiculo);
    }

    if ($method === 'POST') {
        $jsonPost = $_POST['jsonPost'];
        $mostrartodos = $controlador->store($jsonPost);
        //TODO : Cargar vista vehiculo_post.php
        echo json_encode($mostrartodos);
    }
}

request();
