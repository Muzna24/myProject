<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "platform";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit'])){
	$id = $_POST['ID'];
	$name = $_POST['Name'];
	$address = $_POST['Address'];
	$email = $_POST['Email'];
	$phone = $_POST['Phone'];
	$school_id = $_POST['School_ID'];
	
$sql = "INSERT INTO TEACHER (teacher_id, teacher_name, teacher_address, teacher_email, teacher_phone, school_id)
VALUES ('$id','$name','$address','$email','$phone','$school_id')";

if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully";
	header("location: displayTeacher.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>
<html>
<head>
<title>
add teacher
</title>
</head>
<body>
<form action = "teacher.php" method = 'post'>
<fieldset style='width:500px'>
<legend><b>Add School Admin</b></legend>
<table>
<tr>
<td>ID:</td><td><input type='text' name='ID' style='width:100px' required></td>
</tr>
<tr>
<td>Name:</td><td><input type='text' name='Name' style='width:200px' required></td>
</tr>
<tr>
<td>Address:</td><td><input type='text' name='Address' style='width:200px' required></td>
</tr>
<tr>
<td>Email:</td><td><input type='email' name='Email' style='width:200px' required></td>
</tr>
<tr>
<td>Phone Number:</td><td><input type='text' name='Phone' style='width:200px' required></td>
</tr>
<tr>
<td>School ID:</td><td><input type="text" name='School_ID' style='width:200px' required></td>
</tr>
<tr>	
<td><input id= "go"type="submit" name="submit" value="Add"/></td>

</script>
<td><input type="reset"  Value="Reset"/></td>
</tr>
</table>
</fieldset>
</form>
</article><br>
</div>
</body>
</html>