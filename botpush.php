<?php



require "vendor/autoload.php";

$access_token = 'WfqBOyI17jvO7tmFuxZpxFv4CM0IapKvaKoTkgAm4DIrKmeTelGGUmFc1SXEswQgCrQNR9DgHcjipAdfWDaF/8Q/S1oGb4UyLBq6Eu3vgcFhObY1lfP2ey9A8Hv+DeJTZvD1gG2y0zP2gW4OL6/JjwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '328dba7bb4c3382798e12e7e6375d15a';

$pushID = 'U8645a02b0886a18a2856220c7e094a15';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
// ---------------------------
$url = 'https://api.line.me/v2/bot/profile/'.$pushID;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
print_r($result);
echo '<pre>';
var_dump(json_decode($result));
echo '</pre>';
$messages = [
    'type' => 'text',
    'text' => $text
];

// -----------------------
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($rext);
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();



?>



