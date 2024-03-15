<?php
echo "This is a curl example";

// initializes the connection
$ch = curl_init();

//establishes the connection with the specific url
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/');

//retries the data from that server
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//executing the curl command
$server_response = curl_exec($ch);

curl_close($ch);

echo "<pre>"; print_r($server_response); echo "</pre>";
?>