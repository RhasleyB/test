<?php

$bottoken = "1483580865:AAEedY-vMnGNaaTsLtNrbp8_5rxJWQZiuLA";
$telegramurl = "https://api.telegram.org/bot";
$url = $telegramurl.$bottoken;

$update = file_get_contents('php://input');
$update = json_decode($update,TRUE);

$chatId = $update["message"]["chat"]["id"];
$chatTipo = $update["message"]["chat"]["type"];

$mensaje = $update["message"]["text"];
echo $url;
echo $chatId;
echo $mensaje;
switch($mensaje){
case 'start':
	$respuesta = "Hola soy Rhasley, un gusto saludarle";
	enviarMensaje($chatId, $respuesta);
	break;
}

function enviarMensaje($chatId, $respuesta){
	$getUrl = $GLOBALS[url].'sendMessage?chat_id='.$chatId.'&parse_mode=HTML&text'.urlencode($respuesta);
	echo "aqui esta la url: ".$getUrl;
	file_get_contents($getUrl);
}

?>
