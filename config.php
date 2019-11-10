<?php




//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('1092598340588-vskv0t4tsf0vob7qbn5s9fhpnpjnpgi8.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('6y86LvgBJbs1K8Oxi1qTrCr7');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/LoginForm/googleCallback.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
if(!session_id()){
    session_start();
}


/*
 * Basic Site Settings and API Configuration
 */

// Database configuration
// define('DB_HOST', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'test');
// define('DB_USER_TBL', 'users');

// Google API configuration
// define('GOOGLE_CLIENT_ID', '1092598340588-vskv0t4tsf0vob7qbn5s9fhpnpjnpgi8.apps.googleusercontent.com');
// define('GOOGLE_CLIENT_SECRET', '6y86LvgBJbs1K8Oxi1qTrCr7');
// define('GOOGLE_REDIRECT_URL', 'http://localhost/LoginForm/index.php');

// Start session
// if(!session_id()){
//     session_start();
// }

// Include Google API client library
// require_once 'google-api-php-client/Google_Client.php';
// require_once 'google-api-php-client/contrib/Google_Oauth2Service.php';

// Call Google API
// $gClient = new Google_Client();
// $gClient->setApplicationName('login');
// $gClient->setClientId(GOOGLE_CLIENT_ID);
// $gClient->setClientSecret(GOOGLE_CLIENT_SECRET);
// $gClient->setRedirectUri(GOOGLE_REDIRECT_URL);

// $google_oauthV2 = new Google_Oauth2Service($gClient);

// session_start();
// require_once "vendor/autoload.php";
// $getClient = new Google_Client();
// $getClient->setClientId("1092598340588-vskv0t4tsf0vob7qbn5s9fhpnpjnpgi8.apps.googleusercontent.com");
// $getClient->setClientSecret("6y86LvgBJbs1K8Oxi1qTrCr7");
// $getClient->setApplicationName("login");
// $getClient->setRedirectUrl("http://localhost/LoginForm/googleCallback.php");
// $getClient->addScope("email");
// $getClient->addScope("profile");
?>