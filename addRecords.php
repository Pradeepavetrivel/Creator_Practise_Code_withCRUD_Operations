<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 

$post_data = 
[
    'Name.first_name' => 'Pradeepa',
    'Email' => 'pradeepa@aorborc.com',
    'Phone_Number' => '+919756746585',
    'Application_Status' =>'Applied'
    // 'Candidate' => '3584372000006919014',
    // 'Interview_Date_Time' => '28-Feb-2020 18:02:13'
];
// print_r($post_data);

$url = 'https://creator.zoho.com/api/rubenaorborc/json/recruitment-management-practical-app/form/Application_Form/record/add?authtoken=7e05a3a7538760320de314b49ec0bbb1&scope=creatorapi';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
print_r($response);
// $id = $response->ID;
// print_r($id);

$search_url = 'https://creator.zoho.com/api/rubenaorborc/json/recruitment-management-practical-app/form/Application_Form/record/add?authtoken=7e05a3a7538760320de314b49ec0bbb1&scope=creatorapi&criteria=(Email==%27%pradeepa@aorborc.com%27%)';

$search= curl_init();
curl_setopt($search, CURLOPT_URL, $url);
curl_setopt($search, CURLOPT_POST, 1);
// curl_setopt($search, CURLOPT_POSTFIELDS,$post_data);
curl_setopt($search, CURLOPT_RETURNTRANSFER, true);
$search_response = curl_exec($search);
print_r($search_response);


$lookup_data =
[	
  
    'Candidate' => 'ID',
    'Interview_Date_Time' => 'YYYY-MM-DD HH:MM:SS',        
    'Verified' => 'yes'
];
print_r($lookup_data);


$lookup_url = 'https://creator.zoho.com/api/rubenaorborc/json/recruitment-management-practical-app/form/Schedule_Interview/record/add?authtoken=7e05a3a7538760320de314b49ec0bbb1&scope=creatorapi';

$lookup= curl_init();
curl_setopt($lookup, CURLOPT_URL, $url);
curl_setopt($lookup, CURLOPT_POST, 1);
curl_setopt($lookup, CURLOPT_POSTFIELDS,$lookup_data);
curl_setopt($lookup, CURLOPT_RETURNTRANSFER, true);
$lookup_response = curl_exec($lookup);
print_r($lookup_response);

?>