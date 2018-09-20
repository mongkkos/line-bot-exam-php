<?php
 
$strAccessToken = "P+XQxskXjlglPW1w7JPk28AssQdJfHmv05voI1Lg+DiTMNZA3kMKHA/nRjzPhjs/TMbsRtoavduuKbKXJMtFRtKDD/eu64PFjcoLJsbGnSFvCre6mNsH8RyX1l9sjRvDqZ7rAMw1DOk4XiUH39ugsQdB04t89/1O/w1cDnyilFU=";
 
$strUrl = "https://api.line.me/v2/bot/message/push";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
$arrPostData = array();
$arrPostData['to'] = "Ub02584573617660964d9d0ccf0469706";
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "เฌอปรางคะ สวัสดีโอตะ";

}else if($arrJson['events'][0]['message']['text'] == "ชื่ออะไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เฌอปรางคะ";


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
?>
