<?php

// Report all PHP errors
//error_reporting(E_ALL);

include_once('../../../wp-load.php');

global $wpdb;


$table_name = 'estadisticas';


// Takes raw data from the request
$json = file_get_contents('php://input');
$req = json_decode($json);

// datos de json a array para db
$data = array(
    'post' => $req->campoArtista,
    'counter' => $req->campoTema
);

$wpdb->insert($table_name, $data);
$respuesta = [];
if ($wpdb->insert_id) {
    $respuesta = [
        "estado" => "OK",
        "mensaje" => "Datos insertados con éxito",
    ];
} else {
    $respuesta = [
        "estado" => "ERROR",
        "mensaje" => "Datos no ingresados",
    ];
    echo $data;
}

header('Content-Type: application/json');
echo  json_encode($respuesta);

?>