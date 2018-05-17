<?php



require "vendor/autoload.php";

$access_token = 'AlcTu79Llq0dSAwi6uwsaFpDny7cpabv+VRYNoURIsVNd7pa5Y8PikZ7qkL/7KZVeE8yYHe0NZXTvSMvjmQXxYwJLVXH0gIKND3rqwY6teNCdvAeSDdDSp8u/gcI6kWRxj3UwktNpgKf/v5Jys91vAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '85952bc0cd4131a934603e1393f98e4c';

$pushID = 'U3bb254338857f2411071dd2105a2020c';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







