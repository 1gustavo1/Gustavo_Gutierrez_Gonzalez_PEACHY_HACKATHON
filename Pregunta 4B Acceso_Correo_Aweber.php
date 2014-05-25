<?php
//Acceso al correo
require('aweber_api/aweber_api.php');

# replace XXX with your App ID
$appID = 'XXX';

# prompt user to go to authorization URL
echo "Go to this url in your browser: {$this->application->getAuthorizeUrl()}\n";

# prompt user to enter authorization code
echo 'Type authorization code here: ';
$code = trim(fgets(STDIN));

# exchange authorization code for new consumer keys and secrets, and an access token key and secret
$credentials = AWeberAPI::getDataFromAweberID($code);
list($consumerKey, $consumerSecret, $accessKey, $accessSecret) = $credentials;

?>
