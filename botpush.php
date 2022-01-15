<?php



require "vendor/autoload.php";

$access_token = 'WfqBOyI17jvO7tmFuxZpxFv4CM0IapKvaKoTkgAm4DIrKmeTelGGUmFc1SXEswQgCrQNR9DgHcjipAdfWDaF/8Q/S1oGb4UyLBq6Eu3vgcFhObY1lfP2ey9A8Hv+DeJTZvD1gG2y0zP2gW4OL6/JjwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '328dba7bb4c3382798e12e7e6375d15a';

$pushID = 'U8645a02b0886a18a2856220c7e094a15';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







