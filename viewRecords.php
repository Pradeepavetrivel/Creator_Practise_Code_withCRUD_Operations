<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 

$url = 'https://creator.zoho.com/api/json/recruitment-management-practical-app/view/Application_Form_Report?authtoken=7e05a3a7538760320de314b49ec0bbb1&scope=creatorapi&zc_ownername=rubenaorborc&raw=true&criteria=(ID==3584372000006932005)';


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
print_r($response);

?>