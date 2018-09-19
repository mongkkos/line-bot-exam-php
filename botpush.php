<?php



require "vendor/autoload.php";

$access_token = 'Mdi5zLvkh05KApRX+nJAKjH5+8vQ0vkbldh4w3CUmYO7I1OwYI9/6R2TjL1XcGJpVMtG0V7qQA9f2sJl/j26f4mh3hqR/MFLirUKV2yW/nbh4y4G2h+AyIXgUeNPp6/V0oJhoNOGG7m4RKahgFCHigdB04t89/1O/w1cDnyilFU=';

$channelSecret = '3312897e4d69e4600c1890f92198d9fa';

$pushID = 'U1c51e0bc876c27e71984f89b66a5363e'

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







