<?php

// include our OAuth2 Server object
require_once 'server.php';

// Handle a request to a resource and authenticate the access token
if (! $server->verifyResourceRequest ( OAuth2\Request::createFromGlobals () )) {
	$server->getResponse ()->send ();
	// echo json_encode(array('success' => TRUE, 'message' => 'unauthorised request to my APIs!'));
	die ();
}
echo json_encode ( array (
		'error' => FALSE,
		'message' => 'You accessed my APIs!' 
) );

?>