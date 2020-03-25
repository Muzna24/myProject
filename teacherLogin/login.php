<?php
$cookie_name = "loggedin";
	$conn = mysqli_connect("localhost:3306", "root", "", "platform");
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

	if(isset($_POST['login'])){
		$user= $_POST['username'];
		$pass= $_POST['password'];
		
		//$phash = sha1(sha1($pass."salt")."salt");
		
	$sql = "select * from TEACHER_PERMISSION WHERE username = '$user' AND password = '$pass'";
	$result = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($result);
	if ($count == 1){
		$cookie_value = "Teacher";
		setcookie($cookie_name, $cookie_value, time()+(180), "/");
		header("location:hello.php");
	}else{
		echo "Invalid username/password";
	}
	}
?>
