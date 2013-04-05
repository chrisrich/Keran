<?php

$test = curl_init();

// URL using Localhost
curl_setopt($test, CURLOPT_URL, 'http://localhost:8080/AccountRight/2ea36c61-e809-43f2-949a-18a88c677b0b/Customer/');

curl_setopt($test, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($test, CURLOPT_TIMEOUT, '3');
// Authenticate otherwise access deinied
curl_setopt($test, CURLOPT_USERPWD, 'administrator' . ":");
$content = trim(curl_exec($test));
curl_close($test);
print $content;
