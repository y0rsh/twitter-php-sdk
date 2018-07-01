<?php
require_once 'vendor/autoload.php';

$twitter = TwitterSDK\Factory\ClientFactory::createClient();

$result = $twitter->get('statuses/user_timeline', ['screen_name' => 'y0rsh747']);
    dump($result);
//$result = $twitter->get('statuses/user_timeline', ['id' => 123]);
//$result = $twitter->get('statuses/user_timeline', []);
