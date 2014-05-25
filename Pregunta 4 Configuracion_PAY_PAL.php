<? 
//Configuracion de la clase principal

public function __construct($config = "") { 
     $settings = array( 
        'business' => 'correo@hotmail.com',//es el correo de la cuenta 
        'currency' => 'US', //tipo de moneda 
        'cursymbol' => '&pound;', //simbolo de la moneda 
        'location' => 'GB', //codigo de localizacion 
        'returnurl' => 'http://mysite/myreturnpage', //nuestra pagina 
        'returntxt' => 'Return to My Site', //mensaje al regresar 
        'cancelurl' => 'http://mysite/mycancelpage', //pagina de error por si hay una cancelacion 
        'shipping' => 0, //costo del transporte 
        'custom' => '' //atributo 
    ); 
 
    if (!empty($config)) { 
        foreach ($config as $key => $val) { 
            if (!empty($val)) { 
                $settings[$key] = $val; 
            } 
        } 
    }  
    //Enviando atributos 
    $this->business = $settings['business']; 
    $this->currency = $settings['currency']; 
    $this->cursymbol = $settings['cursymbol']; 
    $this->location = $settings['location']; 
    $this->returnurl = $settings['returnurl']; 
    $this->returntxt = $settings['returntxt']; 
    $this->cancelurl = $settings['cancelurl']; 
    $this->shipping = $settings['shipping']; 
    $this->custom = $settings['custom']; 
    $this->items = array(); 
} 
?>  
