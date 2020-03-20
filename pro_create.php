<?php
$id = @$_POST['id'];

if(empty($id)) {
	$name = @$_POST['name'];
	$price = @$_POST['price'];
	$description = @$_POST['description'];
	$category = @$_POST['category'];
	$date = null;
	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => "http://rdapi.herokuapp.com/product/create.php",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS =>"{\n    \"name\" : \"$name\",\n    \"price\" : \"$price\",\n    \"description\" : \"$description\",\n    \"category_id\" : $category,\n    \"created\" : \"$date\"\n}",
		CURLOPT_HTTPHEADER => array(
		  "Content-Type: text/plain"
		),
	  ));
  
  $response = curl_exec($curl);
  
  curl_close($curl);
  // echo $response;
  header("location: index.php");
} else {
	$name = @$_POST['name'];
	$price = @$_POST['price'];
	$description = @$_POST['description'];
	$category = @$_POST['category'];
	$id = @$_POST['id'];
	$date = null;
	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => "http://rdapi.herokuapp.com/product/update.php",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "{\n    \"id\" : \"$id\",\n    \"name\" : \"$name\",\n    \"price\" : \"$price\",\n    \"description\" : \"$description\",\n    \"category_id\" : $category,\n    \"created\" : \"$date\"\n}",
		CURLOPT_HTTPHEADER => array(
			"Content-Type: text/plain"
		),
	));

	$response = curl_exec($curl);

	curl_close($curl);
	// echo $response;
	header("location: index.php");
} 

