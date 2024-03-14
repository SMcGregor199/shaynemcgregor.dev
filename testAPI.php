<?php 
$url = 'https://jsonplaceholder.typicode.com/posts';

$userData = [
  'email' => 'test@example.com',
  'phone' => '1234567890',
  'client_user_agent' => $_SERVER['HTTP_USER_AGENT'],
  'event_time' => $_POST['event_time']
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