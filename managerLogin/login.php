<?php
	$conn = mysqli_connect("localhost:3306", "root", "", "platform");
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	$message = "";
	
	if(isset($_POST['login'])){
		$username= $_POST['username'];
		$password= $_POST['password'];

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
<html>
<head>
<title>
login
</title>
</head>
<body>
<div class="flex-container">
<p style= color:red;><?php echo $message ?></p>
<form action = "login.php" method = 'post'>
<h3>login</h3>
<table>
<tr>
<td>Username:</td><td><input type='text' id= 'user' name='username' style='width:200px'></td>
</tr>
<tr>
<td>Password:</td><td><input type='password' id= 'pass' name='password' style='width:200px'></td>
</tr>
<tr>
<td><input type="submit" name="login" value="login"/></td>
</tr>
</table>
</form>
</div>
</body>
</html>