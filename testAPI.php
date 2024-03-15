<?php 
$fb_pixel = '404040190150830';
$fb_token = 'EAAJ0moBIZCMwBOZB95HgZBLtaZBBPPyPH2ySZBcCjEpCEevfrZAEpuVM35siZAbuHrbZBpLTX2npZAlbaEPzUSu3hTvCJ6gGUbcLZBbBCIHytHs9zmeYAGo0vuQ6SXzapXY5QZBL3iCHvuYkmyB2xDhZBAa22PafdjAUV4ZC9Ic0mI0ThgFvoKPZBgFf0n8N9MPLN3LZBCtnQZDZD';
$current_date = date('m/d/Y h:i:s a', time());
$url = "https://graph.facebook.com/v18.0/'.$fb_pixel.'/events?access_token='.$fb_token";

$postData = [
	'event_name' => 'Test Event',
	'event_time'=> $current_date,
	'userData' => [
	  'client_user_agent' => $_SERVER['HTTP_USER_AGENT'],
	  'client_ip_address' => $_SERVER['REMOTE_ADDR']
	]
];

$data = json_encode($postData);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = [
  "Content-Type: application/json"
];

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
$error = curl_error($ch);

curl_close($ch);

if ($error) {
  echo "Error sending event: " . $error;
} else {
  $responseData = json_decode($response, true);
  echo "Event sent successfully: " . print_r($responseData, true);
}

echo "\nEvent data prepared:\n";
print_r($userData);


?>
