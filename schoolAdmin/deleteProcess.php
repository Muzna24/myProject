<?php
$conn = mysqli_connect("localhost:3306", "root","", "platform");
if(!$conn){
	die("Error on the connection".$conn->connect_error);
}

if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$conn->query("DELETE FROM SCHOOL_ADMINISTRATOR WHERE admin_id=$id") or die($conn->connect_error);
	header("location: displayAdmin.php");
}
?>