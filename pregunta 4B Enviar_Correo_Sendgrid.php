<?php
//Ejemplo enviar un correo

$url = 'https://api.sendgrid.com/';
$user = 'USERNAME';//se coloca nuestro usuario
$pass = 'PASSWORD';//contrasena
//contenido del mensaje
$params = array('api_user'=> $user,'api_key'=> $pass,'to'        => 'example3@sendgrid.com','subject'=> 'testing from curl',
'html' => 'testing body','text' => 'testing body',
    'from'=> 'example@sendgrid.com',
  );


//manda un avizo de envio
$request =  $url.'api/mail.send.json';
$session = curl_init($request);
curl_setopt ($session, CURLOPT_POST, true);
curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

//nos responde si todo estubo bien
$response = curl_exec($session);
curl_close($session);
//coloca la respuesta despues de la ejecucion o envio del mensaje
print_r($response);
?>
