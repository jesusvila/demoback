<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: application/json');

$version = "1.1beta";

// Inicio
if (isset($_SERVER['HTTP_ACTION'])) {
    $accion = $_SERVER['HTTP_ACTION'];
    switch (strtolower($accion)) {
        case strtolower("getBackendHostname"):
            $response['code'] = "200";
            $response['hostname'] = $_SERVER["HTTP_HOST"] . " running version " . $version;
            echo json_encode($response);
            break;;;
        default:
            $response['code'] = "400";
            $response['error'] = "Not defined";
            echo json_encode($response);
    }
} else {
    $response['code'] = "400";
    $response['error'] = "Missing parameters";
    echo json_encode($response);
}
