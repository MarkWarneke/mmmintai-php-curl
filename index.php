<?php

$api_token = $_ENV["ACCESS_TOKEN"];

$url="https://api.mmmint.ai/fahrzeugschein/v1/fahrzeugschein?access_token=".$api_token;

$headers = array(
	"Content-Type:multipart/form-data",
	"Accept:application/json"
);

$fileName = "registration-anonymous.png";
$filePath = $_SERVER['DOCUMENT_ROOT'] . $fileName;

$fields = [
	'file' => new \CurlFile($filePath, 'image/png', $fileName)
];

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $fields);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

//debug

curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp1 = curl_exec($curl);

print_r($resp1);

?>