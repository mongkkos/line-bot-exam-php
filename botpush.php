<?php



require "vendor/autoload.php";

$access_token = 'P+XQxskXjlglPW1w7JPk28AssQdJfHmv05voI1Lg+DiTMNZA3kMKHA/nRjzPhjs/TMbsRtoavduuKbKXJMtFRtKDD/eu64PFjcoLJsbGnSFvCre6mNsH8RyX1l9sjRvDqZ7rAMw1DOk4XiUH39ugsQdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'ad20a90033746dbfdb5aab77f32e7e9a';


$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage('Ub02584573617660964d9d0ccf046970', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







