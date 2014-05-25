<?php 
//mandar una orden:


// Include Google Checkout PHP Client Library 
include ("GlobalAPIFunctions.php"); 
include ("OrderProcessingAPIFunctions.php"); 
include ("ResponseHandlerAPIFunctions.php"); 
 //se establece la orden  
$google_order_number = "841171949013218"; 
$amount = "100.00"; 
$xml_request = CreateChargeOrder($google_order_number, $amount); 
//se incluye un archivo css 
?> 

<html> 
<head> 
    <style type="text/css">@import url(googleCheckout.css);</style>  
</head> 
<body> 
<p style="text-align:center"> 
<table class="table-1" cellspacing="5" cellpadding="5"> 
    <tr><td style="padding-bottom:20px;text-align:center"><h2> 
        Order Processing Command 
    </h2></td></tr> 
    <tr><td style="padding-bottom:20px"> 
        <p><b>Order Processing Command XML:</b></p> 
        <p><?php echo htmlentities($xml_request); ?></p> 
    </td></tr> 
