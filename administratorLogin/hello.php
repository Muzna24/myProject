<?php
$cookie_name = "loggedin";
if(isset($_COOKIE[$cookie_name])){
	$cookie_value= $_COOKIE[$cookie_name];
	echo "Welcome to $cookie_value";
	echo '<a href="logout.php"> Logout</a>';
}
?>
<html>
<head>
<title>
hello
</title>
</head>
<body>
<h1>Hello Admin </h1>
</body>
</html>