<?php


$access_token = 'Mdi5zLvkh05KApRX+nJAKjH5+8vQ0vkbldh4w3CUmYO7I1OwYI9/6R2TjL1XcGJpVMtG0V7qQA9f2sJl/j26f4mh3hqR/MFLirUKV2yW/nbh4y4G2h+AyIXgUeNPp6/V0oJhoNOGG7m4RKahgFCHigdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

