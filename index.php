<?php
require_once 'vendor/autoload.php';

$twitter = new TwitterSDK\Client();

$result = $twitter->get('statuses/user_timeline', ['screen_name' => 'y0rsh747']);