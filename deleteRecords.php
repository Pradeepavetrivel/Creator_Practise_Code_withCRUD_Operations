<?php
ini_set('display_errors', 1);$ch = curl_init();
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 

$url = 'https://creator.zoho.com/api/rubenaorborc/json/recruitment-management-practical-app/form/Application_Form/record/delete?authtoken=7e05a3a7538760320de314b49ec0bbb1&scope=creatorapi&process_until_limit=true&criteria=(Email=="pradeepa@aorborc.com")';


curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
print_r($response);
?>