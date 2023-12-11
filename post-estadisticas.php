<?php

// Report all PHP errors
//error_reporting(E_ALL);

include_once('../../../wp-load.php');

global $wpdb;


$postId = $_GET['postId'];


$query = $wpdb->prepare("SELECT post, COUNT(*) as cantidad FROM `estadisticas` WHERE `post`=%s  GROUP BY `post`", $postId);

$results = $wpdb->get_results($query, ARRAY_A);


 $data = array();

 if ($results) {
    header("HTTP/1.1 200 OK");
    foreach ($results as $post) {
      
        $data = $post;
    }
} else {
    header("HTTP/1.1 400 Bad Request");
    $data['error'] = "No se encontraron resultados";
}

header('Content-Type: application/json');
echo  json_encode($data);

?>