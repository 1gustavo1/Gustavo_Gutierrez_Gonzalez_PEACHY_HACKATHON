
<?php
//Ejemplo que permite llamar a detail_sale  sin entrar a las librerias.


 $ch = curl_init("https://www.2checkout.com/api/sales/detail_salesale_id=1234567890");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json"));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "2Checkout PHP/0.1.0");
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, "apiusername:apipassowrd");
    $json_resp = curl_exec($ch);
    curl_close($ch);
    $array_resp = json_decode($json_resp, true);

    print_r($array_resp);

?>
