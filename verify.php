<?php
$access_token = 'AEyu0dKlsCyILTOlbvLqpCN1KWtqt+S9msUUJWr7tVI8w28DkYz4M8v8kNQgQLFdGck3mGeiV0TDtby+0m4Q9c224RCOTGpxlC/wVfpf13JY2Y/a9oONGlkbiqAvEd0gggKXrUNdjMfcKtNJXXgdpwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

