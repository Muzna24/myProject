<?php
header("Content-Type:application/json");
include("function.php");
if(!empty($_GET['name'])){
	$name= $_GET['name'];
	$price= get_price($name);
	
	if(empty($price))
		deliver_response($name, "book not found", NULL);
	else
		deliver_response($name, "book found", $price);
}
else{
	deliver_response($name, "Invalid Request", NULL);
}

function deliver_response($book, $status_message, $data){
	header("HTTP/1.1 $book $status_message");
	$response['book'] = $book;
	$response['status_message'] = $status_message;
	$response['data'] = $data;
	
	$json_response= json_encode($response);
	echo $json_response;
}
?>