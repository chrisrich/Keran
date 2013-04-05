<?php
$qry_str = "?$skip=4";
$ch = curl_init();

// Set query data here with the URL
curl_setopt($ch, CURLOPT_URL, 'http://localhost:8080/AccountRight/2ea36c61-e809-43f2-949a-18a88c677b0b/Customer/' . $qry_str);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, '3');
curl_setopt($ch, CURLOPT_USERPWD, 'administrator' . ":");
$content = trim(curl_exec($ch));
curl_close($ch);
print $content;
