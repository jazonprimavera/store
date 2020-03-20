<?php
$id = $_POST['id'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://rdapi.herokuapp.com/product/delete.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\n    \"id\" : \"$id\"\n}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Content-Type: text/plain"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
// echo $response;
header("location: index.php");
