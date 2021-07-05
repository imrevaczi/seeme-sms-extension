<?php

include('seeme-gateway-class.php');

// Connect to SeeMe Gateway
$SeeMe = new SeeMeGateway('yourAPIkey');

try {
  
  $SeeMe->sendSMS(
  	'36201234567', // destination
  	'This is my message', // message
  	'senderID' // optional sender
  );
  
  print_r( $SeeMe->getResult() );
  
} catch ( Exception $e ) {
  // handle exception
  // print out the response
  // we will get an aassociative array
  print_r( $SeeMe->getResult() );
  die();
}
