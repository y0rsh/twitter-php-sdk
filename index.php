<?php
require_once 'vendor/autoload.php';

//$result = $twitter->get('statuses/user_timeline', ['screen_name' => 'y0rsh747']);
$settings = [
    'oauth_access_token' => '891811073489240064-acN6f0BhKr528HbUkVrYbDctGNJAUyQ',
    'oauth_access_token_secret' => ' koCrne95qMegiXOswEnBxaqQhh8JeKl3ZKlHOvKEmhfKy',
    'consumer_key' => 'yXDHE29MHmDHz4EVLePs6f8zr',
    'consumer_secret' => 'QjYiR0Md6nrbaFoiRi4gKeFBxEPWwvm6tW3XcXxJ5ATsPcUg7N'
];

$twitter = TwitterSDK\Factory\ClientFactory::createClient($settings);

$result = $twitter->post('oauth2/token', ['grant_type' => 'client_credentials']);
dump($result);
//$result = $twitter->get('statuses/user_timeline', ['id' => 123]);
//$result = $twitter->get('statuses/user_timeline', []);
//https://developer.twitter.com/en/docs/basics/authentication/api-reference/token
