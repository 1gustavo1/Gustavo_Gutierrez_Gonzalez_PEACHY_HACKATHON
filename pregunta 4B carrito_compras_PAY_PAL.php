<? 
//carrito de compras
$items = array( 
1 => array( "nombre" => "tele1", "precio" => 300, "cantidad" => (int) htmlentities($_POST["gtkt"], ENT_QUOTES) ), 
2 => array( "nombre" => "tele2", "precio" => 2320, "cantidad" => (int) htmlentities($_POST["stkt"], ENT_QUOTES) )); 
 //aqui se agregan los items a al carro
include("lib/paypal_checkout/paypal.php");  
$pp = new paypalcheckout(); //crea un objeto de paypal 
 $pp->addMultipleItems($items); //agrega 
 ?>
