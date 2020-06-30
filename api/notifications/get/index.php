<?php

header('Content-type: application/json');

include_once '../../global/functions.php';

global $access_token,$collector_id,$notificationJSON;

// Este servicio llama a la URL recibida en la notificación
// Para ver el estado del pago.

$lastResource = file_get_contents('../notifications.txt');

// $url= "https://api.mercadopago.com/merchant_orders?external_reference=$lastResource&access_token=$access_token";
$url="$lastResource?access_token=$access_token";

// REVISAR AQUÍ:
// Agrega la $url necesaria para revisar el estado del pago en base al recurso recibido de la notificación

// Sustituye el método por su correspondiente: get, put, post, delete

curl_call("GET",$url,"", "getnotificacion.txt");

// https://api.mercadolibre.com/merchant_orders/1551485055?access_token=APP_USR-7026946692817220-061822-8b7c9e20631faac22d9e4cfa92a37265-586728271
// https://api.mercadolibre.com/merchant_orders/1551495297&access_token=APP_USR-7026946692817220-061822-8b7c9e20631faac22d9e4cfa92a37265-586728271
?>