<?php

require 'vendor/autoload.php';

use S25\HTTPClient\Client;
use S25\HTTPClient\UserAgent;

$client   = new Client();
$client->setUserAgent(UserAgent::getRandom());
$client->setHeaders(['Accept-Language' => 'ru,en-US;q=0.9,en;q=0.8,ja;q=0.7,fr;q=0.6,es;q=0.5,de;q=0.4']);
$client->setReferer('https://yandex.ru');
$result = $client->get('http://httpbin.org/headers');

var_dump($result);