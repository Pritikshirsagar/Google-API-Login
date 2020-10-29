<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'API/vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('783949145689-81c0g89ulccq1l37pndef302bcornivn.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('9ssIDGXqRQn8fnNRw2hVNbv5');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/Google-USA/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>