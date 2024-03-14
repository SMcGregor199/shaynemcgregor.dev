<?php 
$fb_pixel;
$fb_token;

$url = 'https://jsonplaceholder.typicode.com/posts';

$postData = [
	'event_name' => '',
	'event_time'=> '',
	'userData' => [
	  'client_user_agent' => $_SERVER['HTTP_USER_AGENT'],
	  'client_ip_address' => $_SERVER['REMOTE_ADDR'],
	  'e_mail' => '' ,
	  'phone_number' => '', 
	  'client_id' => '',
	  'location_data' => ''
	]
];

$data = json_encode($userData);

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
<?php
        curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v18.0/'.$fb_pixel.'/events');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);