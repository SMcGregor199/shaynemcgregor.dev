<?php
// echo "This is a curl example for getting data";

// // initializes the connection
// $ch = curl_init();

// //establishes the connection with the specific url
// curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/');

// //retries the data from that server
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// //executing the curl command
// $server_response = curl_exec($ch);

// curl_close($ch);

// echo "<pre>"; print_r($server_response); echo "</pre>";



echo "This is a curl example for posting data";
$userData = [
	'client_name' => 'Dr. Test Person',
	'client_address' => '123 Test Ave.'
];

// initializes the connection
$ch = curl_init();

//establishes the connection with the specific url
curl_setopt($ch, CURLOPT_URL, 'https://arapblog.com/');

//lets the cURL know that we're posting data
curl_setopt($ch, CURLOPT_POST, true);

//retries the data from that server
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//lets the cURL know what data we're posting
curl_setopt($ch, CURLOPT_POSTFIELDS,$userData);

//executing the curl command
$result = curl_exec($ch);

curl_close($ch);

// echo $result;


?>