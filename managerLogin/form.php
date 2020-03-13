<?php
	$conn = mysqli_connect("localhost:3306", "root", "", "platform");
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	if(isset($_POST['login'])){
		$username= $_POST['username'];
		$password= $_POST['password'];
		$message = "";
			
	$sql = "select * from MANAGER_PERMISSION where username = '$username' AND password = '$password'";
	$result = mysqli_query($conn,$sql);
	if ($result) {
    $row = mysqli_fetch_array($result);
	if($row['username'] == $username && $row['password']== $password){
		header("location:hello.html");
		$message = "";
	}else{
		$message = "Incorrect username/password";
	}
	}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	}
	mysqli_close($conn);
?>
