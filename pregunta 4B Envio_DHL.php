<?php
//Ejemplo de envios
$apiKey = 'your_api_key';

// codigo postal origen
$pzFrom = '90210';

// codigo postal destino
$pzTo = '10010';

//peso del paquete
$weight = '10';

// usa la clave
$myURL  = 'http://api0.shipgooder.com/raterequest.shtml?key=' . $apiKey;
$myURL .= '&PZfrom=' . $pzFrom;
$myURL .= '&PZto=' . $pzTo;
$myURL .= '&weight=' . $weight;
$myURL .= '&packages=1&'; 

// uso de la curl 
$session = curl_init($myURL);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($session);
curl_close($session);
$rates = simplexml_load_string($data);
?>
