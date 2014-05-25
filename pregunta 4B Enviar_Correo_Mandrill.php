<?php 
require 'Mandrill.php';//se manda a llamar la clase principal 
$mandrill = new Mandrill(); //se crea un nuevo objeto 
 
$mandrill = new Mandrill("YOUR_API_KEY");//se usa la ApiKey  
 
$message = array( 
    'subject' => 'Test message',//mensaje a mandar 
    'from_email' => 'you@yourdomain.com',//Orige 
    'html' => '<p>this is a test message with Mandrill\'s PHP wrapper!.</p>',//mensaje 
    'to' => array(array('email' => 'recipient1@domain.com', 'name' => 'Recipient 1')), 
    'merge_vars' => array(array( 
        'rcpt' => 'recipient1@domain.com', 
        'vars' => 
        array( 
            array( 
                'name' => 'FIRSTNAME', 
                'content' => 'Recipient 1 first name'), 
            array( 
                'name' => 'LASTNAME', 
                'content' => 'Last name') 
    )))); 
 
$template_name = 'Stationary'; 
 
$template_content = array( 
    array( 
        'name' => 'main', 
        'content' => 'Hi *|FIRSTNAME|* *|LASTNAME|*, thanks for signing up.'), 
    array( 
        'name' => 'footer', 
        'content' => 'Copyright 2012.') 
 
); 
//manda el mensaje 
print_r($mandrill->messages->sendTemplate($template_name, $template_content, $message)); 
 
?>
