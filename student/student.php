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
	$level = $_POST['Level'];
	$address = $_POST['Address'];
	$email = $_POST['Email'];
	$school_id = $_POST['id'];
	
$sql = "INSERT INTO STUDENT (student_id, student_name, student_level, student_address, student_email, school_id)
VALUES ('$id','$name','$level','$address','$email','$school_id')";

if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully";
	header("location: displayStudent.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>
<html>
<head>
<title>
add student
</title>
</head>
<body>
<form action = "student.php" method = 'post'>
<fieldset style='width:500px'>
<legend><b>Add Student</b></legend>
<table>
<tr>
<td>ID:</td><td><input type='text' name='ID' style='width:100px' value= "" required></td>
</tr>
<tr>
<td>Name:</td><td><input type='text' name='Name' style='width:200px' value= "" required></td>
</tr>
<tr>
<td>Level:</td><td><input type="text"   name="Level" style='width:200px' value="" required></td>
</tr>
<tr>
<td>Address:</td><td><input type='text' name='Address' style='width:200px' value= "" required></td>
</tr>
<tr>
<td>Email:</td><td><input type='email' name='Email' style='width:200px' value= "" required></td>
</tr>
<tr>
<td>School ID:</td><td><input type="text"   name="id" style='width:200px' value="" required></td>
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